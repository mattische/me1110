<?php
if($_GET)
{
	//please note that this content might be fetched from a db....

	if($_GET['action']) {
		echo "<ul>" . $_GET['action'] . "<br />";
		echo "<li>banana</li><li>apple</li><li>orange</li></ul>";
	
	}


}
?>
