<?php
include 'connection.php';
$id=$_GET["id"];
mysqli_query($conn,"update t_order set status='Cancel' where id='$id'")
?>

<script type="text/javascript">
	window.location="index.php"; 
</script>