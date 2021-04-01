<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$loader = new Twig\Loader\FilesystemLoader('views');
$twig = new Twig\Environment($loader);

$client = new MongoDB\Client(
   'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@'.$_ENV['ATLAS_CLUSTER_SRV'].'/test'
);

use Doctrine\Inflector\InflectorFactory;
$inflector = InflectorFactory::create()->build();


if (!empty($_POST['first_name'])) {
   $first_name = $_POST["first_name"];
   $last_name = $_POST["last_name"];
   $color = $_POST['color'];
   $email = $_POST['email'];
   $company = $_POST['company'];
   $adjective = $_POST['adjective'];
   $place = $_POST['place'];
   $verb = $_POST['verb'];
   $food = $_POST['food'];
   $singular_noun = $_POST['singular_noun'];
   $job_function = $_POST['job_function'];

   $collection = $client->selectCollection('madlibs', 'responses');
   $plural_noun =  $inflector->pluralize($_POST['singular_noun']); 

   $insertOneResult = $collection->insertOne([
      'first_name' => $first_name,
      'last_name' => $last_name,
      'color' => $color,
      'email' => $email,
      'company' => $company,
      'adjective' => $adjective,
      'food' => $food,
      'place' => $place,
      'verb' => $verb,
      'plural_noun' => $plural_noun,
      'singular_noun' => $singular_noun,
      'job_function' => $job_function,
   ]);

   printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

   var_dump($insertOneResult->getInsertedId());

}

?>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>MongoDB PHP Quickstart - Madlibs</title>

</head>

<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MongoDB PHP - Quickstart - Mad Libs</a>
</nav>
<div class="container text-center">
<img src="images/madlibs.png" 
             class="img-responsive" alt="mad libs" 
             width="500" height="178" />        <h1>MongoDB PHP Quickstart - Mad Libs </h1>
        <br>  
            Fill in the blanks, and let's create a story!
        </p>
    </div>
<?php
if (!isset($_POST['submit']))
{
  // display the form
  ?>
<div class="container">
<form class="form-horizontal" method='POST' action="index.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="first_name">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
    </div>
    <label class="control-label col-sm-2" for="last_name">Last Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
    </div>
    <label class="control-label col-sm-2" for="email">Email Address:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
    </div>
    <label class="control-label col-sm-2" for="company">Company Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
    </div>

    <label class="control-label col-sm-2" for="job_function"> Job Title:</label>
    <div class="col-sm-10">
      <select name="job_function" class="custom-select">
         <option value="IT executive">IT executive</option>
         <option value="Business Executive">Business Executive</option>
         <option value="Architect">Architect</option> 
         <option value="Business Developer/Alliance Manager">Business Developer/Alliance Manager</option> 
         <option value="DBA">DBA</option>
         <option value="Technical Operations">Technical Operations</option>
         <option value="Director/Development Manager">Director/Development Manager</option>
         <option value="Product/Project Manager">Product/Project Manager</option>
         <option value="Software Developer/Engineer">Software Developer/Engineer</option>
         <option value="Mobile Engineer">Mobile Engineer</option> 
         <option value="Business Analyst">Business Analyst</option> 
         <option value="Data Scientist">Data Scientist</option> 
         <option value="Student">Student</option> 
         <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="adjective">Adjective:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="adjective" name="adjective" placeholder="Enter an adjective">
    </div>

    <label class="control-label col-sm-2" for="singular_noun">Singular Noun:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="singular_noun" name="singular_noun" placeholder="Enter a singular noun e.g. Hammer">
    </div>

    <label class="control-label col-sm-2" for="food">Favorite Food:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="food" name="food" placeholder="Enter your favorite food e.g. Pizza">
    </div>

    <label class="control-label col-sm-2" for="verb">Verb:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="verb" name="verb" placeholder="Enter a verb e.g. Run">
    </div>

    <label class="control-label col-sm-2" for="place">Place:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="place" name="place" placeholder="Enter the name of a place e.g. Pittsburgh">
    </div>

    <label class="control-label col-sm-2" for="color">Favorite Color:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="color" name="color" placeholder="Enter the name of your favorite color e.g. red">
    </div>


  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<?php
}
else
{
?>
<div class="container">
   <h2>Thanks for Playing - here's your story</h2>
   
<?php
   echo $twig->render('story.html', array(
      'first_name' => $first_name,
      'last_name' => $last_name,
      'color' => $color,
      'email' => $email,
      'company' => $company,
      'adjective' => $adjective,
      'verb' => $verb,
      'plural_noun' => $plural_noun,
      'food' => $food,
      'singular_noun' => $singular_noun,
      'job_function' => $job_function

   ));
?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
</p>
    <a class="btn btn-large btn-success" id="fire" href=".">Play Again</a>
    </div>
  </div>

  </div>
 <?php 
}
?>

</body>
</html>
