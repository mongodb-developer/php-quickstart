<?php
// created by alvin alexander, http://devdaily.com
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <label class="control-label col-sm-2" for="company">Company Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
    </div>

    <label class="control-label col-sm-2" for="job_function"> Job Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="job_function" name="job_function" placeholder="Enter your job title">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="adjective">Adjective:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="adjective" name="adjective" placeholder="Enter an adjective">
    </div>

    <label class="control-label col-sm-2" for="singular_noun">Singular Noun:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="singular_noun" name="singular_noun" placeholder="Enter a singular noun">
    </div>

    <label class="control-label col-sm-2" for="plural_noun">Plural Noun:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="plural_noun" name="plural_noun" placeholder="Enter a plural noun">
    </div>

    <label class="control-label col-sm-2" for="verb">Verb:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="verb" name="verb" placeholder="Enter a verb">
    </div>

    <label class="control-label col-sm-2" for="place">Place:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="place" name="place" placeholder="Enter the name of a place">
    </div>

    <label class="control-label col-sm-2" for="food">Favorite Food:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="food" name="food" placeholder="Enter the name of your favorite food i.e. Pizza ">
    </div>

    <label class="control-label col-sm-2" for="color">Favorite Color:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="color" name="color" placeholder="Enter the name of your favorite color i.e. red">
    </div>

    <label class="control-label col-sm-2" for="country">Country:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="country" name="country" placeholder="Enter the name of your country">
    </div>

    <label class="control-label col-sm-2" for="body_part">Body Part:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="body_part" name="body_part" placeholder="Enter the name of a body part">
    </div>

  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
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
