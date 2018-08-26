<?php
include 'connection.php';
session_start();
$id=$_GET["name"];
$result=mysqli_query($conn,"select * from tables where name='$id'");
$id = $_SESSION['id'];

$ud = mysqli_query($conn,"select * from user where id=$id");
$ud = mysqli_fetch_array($ud);
//echo $ud['id'];
$date =mysqli_real_escape_string($conn,$_GET['date']);
//echo $quantity;
$row = mysqli_fetch_array($result);

//echo $date;
//$sql = "insert into order_list values('',$row['name'],$row['id'],$quantity,$date,$ud['user'],$ud['id'],$ud['phone'],$ud[''],'no',$total)";
$sql = "insert into t_order values('','".$row['name']."',".$row['members'].",'".$date."','".$ud['fname']."',".$ud['id'].",".$ud['phone'].",'".$ud['address']."','pending..',".$row['price'].")";
echo $sql;
mysqli_query($conn,$sql); 


?>

<script type="text/javascript">
	alert("successfully placed");
	window.location="index.php"; 
</script>