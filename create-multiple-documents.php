<?php

      require_once __DIR__ . '/vendor/autoload.php';
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      $client = new MongoDB\Client(
         'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@'.$_ENV['ATLAS_CLUSTER_SRV'].'/test'
      );
     
      $collection = ($client)->test->users;

      $insertManyResult = $collection->insertMany([
         [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'name' => 'Admin User',
         ],
         [
            'username' => 'test',
            'email' => 'test@example.com',
            'name' => 'Test User',
         ],
      ]);

      printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

      var_dump($insertManyResult->getInsertedIds());

