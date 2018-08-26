<?php
include 'connection.php';
session_start();
$id=$_GET["id"];
//echo "id".$id;
$sql = "select * from menu where id='$id'";
//echo $sql;
$result=mysqli_query($conn,$sql);

$id = $_SESSION['id'];

$ud = mysqli_query($conn,"select * from user where id=$id");
$ud = mysqli_fetch_array($ud);
//echo $ud['id'];
$quantity =mysqli_real_escape_string($conn,$_GET['quantity']);
//echo $quantity;

$row = mysqli_fetch_array($result);
//echo "Price".$row['price'];
$total = $quantity * $row['price'];
$date =  date("Y-m-d");
//echo $date;
//$sql = "insert into order_list values('',$row['name'],$row['id'],$quantity,$date,$ud['user'],$ud['id'],$ud['phone'],$ud[''],'no',$total)";
$sql = "insert into order_list values('','".$row['name']."',".$row['id'].",".$quantity.",'".$date."','".$ud['fname']."',".$ud['id'].",".$ud['phone'].",'".$ud['address']."','no',".$total.")";
//echo $sql;
mysqli_query($conn,$sql); 

?>
	<script type="text/javascript">
		alert("Your order successfully placed");
	</script>
<?php

if($row['type'] == 'veg')
{
	?>
	<script type="text/javascript">
	window.location="veg.php"; 
	</script>
	<?php
}else if($row['type'] == 'non-veg')
{
	?>
	<script type="text/javascript">
	window.location="non-veg.php"; 
	</script>
	<?php
}else if($row['type'] == 'wine')
{
	?>
	<script type="text/javascript">
	window.location="veg.php"; 
	</script>
	<?php
}
?>

