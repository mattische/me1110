<?php
if($_POST)
{
	
//please note, that this is static content. It could be fetched from database...
	
//we could also check $_SESSION stuff  for privileges... you get the point.

	

  if(($_POST['usr']) && ($_POST['psw'])) {

		
     echo "This is content generated from php in post.php.<br /><br />";

     echo "provided login credentials: " . $_POST['usr'] . " " .  $_POST['psw'];
     echo "<br />You should log in the user via a check against the database...";
  }
	
  else

     echo "Please provide login credentials! Fill out the form.<br />";

  }

?>
