<?php
function menu()
{
	include('admin/connection.php');
	$stmt= ("SELECT * FROM catagory WHERE status= 1 ORDER BY id DESC LIMIT 0,7");
	$qry=mysqli_query($conn,$stmt);
	while ($row= mysqli_fetch_array($qry))
	{
		$id=$row['id'];
		$heading=$row['heading'];
		$shortstory=$row['shortstory'];
		$image=$row['image'];
		$postdate=$row['postdate'];
		$catagory_id=$row['catagory_id'];
		$user_id=$row['user_id'];
		
		echo "<div class ="soci">
		<ul>
		<ul>
		<li><a href='#' class=''

		echo "<li class =''> <a href='catagory.php?id=$id' title=$title>$title</a></li>";

	}
}
?>