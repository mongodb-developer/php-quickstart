<?php

   //
   // This example uses data from the Sample Datasets in MongoDB Atlas
   // To load, and use this sample data, see https://docs.atlas.mongodb.com/sample-data/available-sample-datasets/
   //

      require_once __DIR__ . '/vendor/autoload.php';
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      $client = new MongoDB\Client(
         'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@'.$_ENV['ATLAS_CLUSTER_SRV'].'/sample_restaurants'
      );

      $collection = $client->selectCollection('sample_analytics', 'customers');
   
      $deleteResult = $collection->deleteMany(['cuisine' => 'Hamburgers']);

      printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());      
