<?php

$extension = $argv[1] ?? 'mongodb';

$version = phpversion($extension);

if (PHP_SAPI !== 'cli') {
    echo '<pre>';
}
echo $version;

?>
