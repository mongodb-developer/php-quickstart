<?php

$extension = $argv[1] ?? 'mongodb';

$version = phpversion($extension);

if (PHP_SAPI !== 'cli') {
    echo '<pre>';
}

if (false !== $version) {
    printf("Extension \"%s\" is loaded. Version: %s\n", $extension, $version);
    exit;
}

printf("Extension \"%s\" is not loaded. Will attempt to scan INI files.\n", $extension);

$grep = function(string $filename) use ($extension) : int {
    $lines = [];

    foreach (new SplFileObject($filename) as $i => $line) {
        if (strpos($line, 'extension') === false) {
            continue;
        }

        if (strpos($line, $extension) === false) {
            continue;
        }

        $lines[$i] = $line;
    }

    if (empty($lines)) {
        printf("No interesting lines in %s.\n", $filename);

        return 0;
    }

    printf("Interesting lines in %s...\n", $filename);
    foreach ($lines as $i => $line) {
        printf("  %d: %s\n", $i + 1, trim($line));
    }

    return count($lines);
};

// Check main INI file
$ini = php_ini_loaded_file();
$lines = 0;

if (false === $ini) {
    printf("No php.ini file is loaded. Will attempt to scan additional INI files.\n");
} else {
    $lines += $grep($ini);
}

// Check additional INI files in scan directory
// See: https://www.php.net/manual/en/configuration.file.php#configuration.file.scan
$files = php_ini_scanned_files();

if (empty($files)) {
    printf("No additional INI files are loaded. Nothing left to scan.\n");
} else {
    foreach (explode(',', $files) as $ini) {
        $lines += $grep(trim($ini));
    }
}

echo "\n";
printf("PHP will look for extensions in: %s\n", PHP_EXTENSION_DIR);
printf("Checking if that directory is readable: %s\n", is_dir(PHP_EXTENSION_DIR) || ! is_readable(PHP_EXTENSION_DIR) ? 'yes' : 'no');

echo "\n";

if (defined('PHP_WINDOWS_VERSION_BUILD')) {
    $zts = PHP_ZTS ? 'Thread Safe (TS)' : 'Non Thread Safe (NTS)';
    $arch = PHP_INT_SIZE === 8 ? 'x64' : 'x86';
    $dll = sprintf("%d.%d %s %s", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, $zts, $arch);

    printf("You likely need to download a Windows DLL for: %s\n", $dll);
    printf("Windows DLLs should be available from: https://pecl.php.net/package/%s\n", $extension);

    $filename = sprintf('php_%s.dll', $extension);

} else {
    printf("You should install the extension using the pecl command in %s\n", PHP_BINDIR);

    $filename = sprintf('%s.so', $extension);
}

printf("After installing the extension, you should add \"extension=%s\" to php.ini\n", $filename);
