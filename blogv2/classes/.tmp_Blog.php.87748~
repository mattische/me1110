<?php
include("DB.php");


class Blog
{
	private $db;
	
	public function __construct()
	{
		$this->db = new DB();
	}
	
	public function fetchPosts()
	{
		$con = $this->db->connect();
		$ref = $this->db->query("SELECT * FROM blogpost ORDER BY enter_date");
		
		while($row = mysql_fetch_object($ref)){
			echo "<a href='index.php?action=showpost&blog_id={$row->id}'>" . $row->headline . "</a> @ {$row->author} {$row->enter_date}<br />";
		}
		$this->db->cc($con, $ref);
	}
	
	public function fetchPost($id)
	{
		$con = $this->db->connect();
		$ref = $this->db->query("SELECT * FROM blogpost WHERE id={$id}  ORDER BY enter_date");
		
		while($row = mysql_fetch_object($ref)){
			echo $row->enter_date . "<br /><b>" . $row->headline . "</b><br />" . $row->body;
		}
		$this->db->cc($con, $ref);
	}
	
	public function remove($id)
	{
		$con = $this->db->connect();
		$this->db->query("DELETE FROM blogpost WHERE id={$id}");
		
		$this->db->cc($con);
	}
	
	public function create($headline, $body, $author)
	{
		
		$con = $this->db->connect();
		
		$headline 	= mysql_real_escape_string($headline);
		$body 		= mysql_real_escape_string($body);
				
		$this->db->query("INSERT INTO blogpost (id, enter_date, headline, 
		                 body, author) 
		                 VALUES('', NOW(), '{$headline}', '{$body}', {$author})");
		
		$this->db->cc($con);
	}
}
/*
$blog = new Blog();
$blog->create("Jag har fångat fisk", "Köp kött", 2);
$blog->fetchPosts();
$blog->remove(2);
echo "removed ...<br /><br />";
$blog->fetchPosts();

$db = new DB();
$c = $db->connect();
$r = $db->query("SELECT * FROM blogpost");


while($row = mysql_fetch_object($r)){
	echo $row->id . " " . $row->headline . "<br />";
}

$db->cc($c, $r);
*/
?>