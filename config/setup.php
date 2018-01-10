<?php
/*
 * Setup File
 * 
 */

$site_title='Wajasiri Ltd';
$page_title='Home Page';
 
//database connection
$db_connection = mysqli_connect('localhost', 'wajdev', 'wajpassx', 'wajasiribms') OR DIE('Error'.mysqli_connect_error); 
 
 if(isset($_GET['page'])){
 	$pageid=$_GET['page']; //changing loaded page by links or GET
 }
 else {
     $pageid=1; //default is to load home page
 }
 
$db_query="SELECT * FROM pages WHERE id=$pageid";
$query_result= mysqli_query($db_connection, $db_query);
$page= mysqli_fetch_assoc($query_result);
 
 
?>