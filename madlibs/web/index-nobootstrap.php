<?php
if (!empty($_POST['first_name'])) {
   $first_name = $_POST["first_name"];
   $last_name = $_POST["last_name"];
   $color = $_POST['color'];
   $food = $_POST['food'];
   $company = $_POST['company'];
   $adjective = $_POST['adjective'];
   $place = $_POST['place'];
   $verb = $_POST['verb'];
   $plural_noun = $_POST['plural_noun'];
   $singular_noun = $_POST['singular_noun'];
   $job_function = $_POST['job_function'];
   $body_part = $_POST['body_part'];
   $country = $_POST['country'];
}

?>

<html>
<head>
   <title>MongoDB PHP Quickstart - Madlibs</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MongoDB PHP - Quickstart - Mad Libs</a>
</nav>
<?php
if (!isset($_POST['submit']))
{
  // display the form
  ?>
<div class="container">
<form method='POST' action="index.php">
  <p>
    First Name:</br>
    <br>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
      <br>
    Last Name:</br>
    <br>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
      <br>
    Company Name:</br>
    <br>
      <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
      <br>

    Job Title:</br>
    <br>
      <input type="text" class="form-control" id="job_function" name="job_function" placeholder="Enter your job title">
      <br>
    Adjective:</br>
    <br>
      <input type="text" class="form-control" id="adjective" name="adjective" placeholder="Enter an adjective">
      <br>

    Singular Noun:</br>
    <br>
      <input type="text" class="form-control" id="singular_noun" name="singular_noun" placeholder="Enter a singular noun">
      <br>

    Plural Noun:</br>
    <br>
      <input type="text" class="form-control" id="plural_noun" name="plural_noun" placeholder="Enter a plural noun">
      <br>

    Verb:</br>
    <br>
      <input type="text" class="form-control" id="verb" name="verb" placeholder="Enter a verb">
      <br>

    Place:</br>
    <br>
      <input type="text" class="form-control" id="place" name="place" placeholder="Enter the name of a place">
      <br>

    Favorite Food:</br>
    <br>
      <input type="text" class="form-control" id="food" name="food" placeholder="Enter the name of your favorite food i.e. Pizza ">
      <br>

    Favorite Color:</br>
    <br>
      <input type="text" class="form-control" id="color" name="color" placeholder="Enter the name of your favorite color i.e. red">
    <p>

    Country:</br>
    <br>
      <input type="text" class="form-control" id="country" name="country" placeholder="Enter the name of your country">
      <br>

    Body Part:</br>
    <br>
      <input type="text" class="form-control" id="body_part" name="body_part" placeholder="Enter the name of a body part">
      <br>

      <br>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
   </p>
</form>
</div>
<?php
}
else
{
   ?>
  // display the output
  World renowned <b><?php echo $job_function?></b>, <b><?php echo $first_name." ".$last_name?></b>, had been stranded on this planet for far too long. 

  Sick of the taste of <b><?php echo $food?></b>, which was the only thing left to eat on this planet, <b><?php echo $first_name?></b> set out for higher ground. 
  
  If the <b><?php echo $color?></b> <b><?php echo $plural_noun?></b> were going to be stopped, <b><?php echo $first_name?></b> knew they were the only one that could stop them. 
  
  After all, that's why <b><?php echo $company?></b> hired <b><?php echo $first_name?></b> in the first place.
  
  Just as <b><?php echo $first_name?></b> got to the top of <b><?php echo $place?></b>, <b><?php echo $first_name?></b> saw that it was flooded with <b><?php echo $color?></b> <b><?php echo $plural_noun?></b>. 
  
  They immediately swarmed <b><?php echo $first_name?></b>, attacking on first sight. 
  
  Just like that <b><?php echo $first_name?></b>'s <b><?php echo $body_part?></b> was paralyzed. Things were taking a dire turn.
  
  It was then <b><?php echo $first_name?></b> remembered the secret weapon <b><?php echo $company?></b> had given <b><?php echo $first_name?></b> - <b><?php echo $adjective?></b>. 
  
  <b><?php echo $first_name?></b> took a <b><?php echo $adjective?></b> <b><?php echo $singular_noun?></b> and <b><?php echo $verb?></b>. 
  
  It didn't take long for the <b><?php echo $color?></b> <b><?php echo $plural_noun?></b> to know they were going to lose this battle. 
  
  Trying to safe face, they quickly retreated down the side of <b><?php echo $place?></b>, leaving <b><?php echo $first_name?></b> to enjoy the sweet taste of victory. 
  
  Although it cost a slight injury, the battle had been won. But the question still lingered - who would win the war?
  
  All <b><?php echo $first_name?></b> knew was that <b><?php echo $company?></b> would be thankful, heck even <b><?php echo $country?></b> would be thankful. 
  
  Every small win counted during times like these. 
 <?php 
}
?>

</body>
</html>
