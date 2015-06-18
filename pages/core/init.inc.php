<?php
	mysql_connect("local host",'root',);//connect to the database
	mysql_select_db('bus_reservation');//select the database
	
	$core_path = dirname(__FILE__);
	
	include("{$core_path}/inc/blog_posts.inc.php"); 
?>