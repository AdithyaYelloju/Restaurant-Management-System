<?php
include 'connection.php';
$id=$_GET["id"];
mysqli_query($conn,"update order_list set status='no' where id='$id'")
?>

<script type="text/javascript">
	window.location="index.php"; 
</script>