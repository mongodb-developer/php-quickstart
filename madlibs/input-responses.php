<?php

      require_once __DIR__ . '/vendor/autoload.php';
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      $client = new MongoDB\Client(
         'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@'.$_ENV['ATLAS_CLUSTER_SRV'].'/madlibs'
      );

      if ($client) {
         echo "Connected to MongoDB...";
      } else {
         die("unable to connect to MongoDB...");
      }

      $first = readline("Enter your first name: ");
      $last = readline("Enter your last name: ");
      $color = readline("Enter your favorite color: ");
      $company = readline("Enter your company: ");
      $food = readline("Enter your favorite food: ");
      $job_function = readline("Enter your job function: ");
      $adjective = readline("Enter an adjective: ");
      $place = readline("Enter a place: ");
      $verb = readline("Enter a verb: ");
      $plural = readline("Enter a plural noun: ");
      $singular = readline("Enter a singular noun: ");
      $body_part = readline("Enter a body part: ");
      $country = readline("Enter a country: ");

      // Subdocument for Person

      $person = ([
         "first" => $first,
         "last" => $last
      ]);
     
      $collection = ($client)->madlibs->responses;

      $insertOneResult = $collection->insertOne([
         'person' => $person,
         'color' => $color,
         'food' => $food,
         'company' => $company,
         'job_function' => $job_function,
         'adjective' => $adjective,
         'place' => $place,
         'plural_noun' => $plural,
         'verb' => $verb,
         'singular_noun' => $singular,
         'body_part' => $body_part,
         'country' => $country
      ]);

      printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

      var_dump($insertOneResult->getInsertedId());

   ?>

World renowned <?php echo $job_function;?>, <?php echo $first." ".$last;?>, had been stranded on this planet for far too long. 

Sick of the taste of <?php echo $food;?>, which was the only thing left to eat on this planet, <?php echo $first;?> set out for higher ground. 

If the <?php echo $color;?> <?php echo $plural;?> were going to be stopped, <?php echo $first;?> knew they were the only one that could stop them. 

After all, that's why <?php echo $company;?> hired <?php echo $first;?> in the first place.

Just as <?php echo $first;?> got to the top of <?php echo $place;?>, <?php echo $first;?> saw that it was flooded with <?php echo $color;?> <?php echo $plural;?>. 

They immediately swarmed <?php echo $first;?>, attacking on first sight. 

Just like that <?php echo $first;?>'s <?php echo $body_part;?> was paralyzed. Things were taking a dire turn.

It was then <?php echo $first;?> remembered the secret weapon <?php echo $company;?> had given <?php echo $first;?> - <?php echo $adjective;?>. 

<?php echo $first;?> took a <?php echo $adjective;?> <?php echo $singular;?> and <?php echo $verb;?>. 

It didn't take long for the <?php echo $color;?> <?php echo $plural;?> to know they were going to lose this battle. 

Trying to safe face, they quickly retreated down the side of <?php echo $place;?>, leaving <?php echo $first;?> to enjoy the sweet taste of victory. 

Although it cost a slight injury, the battle had been won. But the question still lingered - who would win the war?

All <?php echo $first;?> knew was that <?php echo $company;?> would be thankful, heck even <?php echo $country;?> would be thankful. 

Every small win counted during times like these. 

