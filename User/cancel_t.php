<?php
include 'connection.php';
$id=$_GET["id"];

mysqli_query($conn,"delete from t_order where id='$id'");
?>

<script type="text/javascript">
	window.location="orders.php"; 
</script>