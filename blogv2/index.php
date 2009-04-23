<?php
include("classes/Blog.php");


$blog = new Blog();
if($_GET)
{
	switch($_GET['action'])
	{
		case "showpost":
			$blog->fetchPost($_GET['blog_id']);
			echo "<br /><br /><a href='private_page.php'>&lt;&lt;&lt;go back</a>";
			break;
		case "createform":
			include("createpost.php");
			break;
		case "createpost":
			$blog->create($_POST['headline'], $_POST['body'], 1);
			echo "<br /><br /><a href='private_page.php'>post created!</a>";
			break;
		default:
			$blog->fetchPosts();
			break;
	}
}
else
	$blog->fetchPosts();


?>
