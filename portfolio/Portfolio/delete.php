<?php 
$conn=mysqli_connect("localhost","root","","information");
$delete_id=$_GET['delete'];
$query=mysqli_query($conn,"delete from message where id='$delete_id'");
if($query==true)
{
	echo "<script>window.location.href='table.php';</script>";
}
else
{
	echo "unable to delete";
}