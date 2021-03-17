<?php
$elements = ["first_name", "last_name", "company_name"];
//get 3 commands from user
$variables    = array("first_name", "last_name", "company_name");

// Then this loop is ...
foreach($variables as $variable)
  $$variable = prompt(ucfirst(str_replace('_', ' ', $variable)));

  print "First: ".$first_name."\n"; 
  print "Last: ".$last_name."\n"; 
  print "Company: ".$company_name."\n"; 

function prompt($prompt) {
   return readline($prompt.": ");
}