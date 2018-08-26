<?php
include 'connection.php';
$id=$_GET["id"];
//echo $id;
mysqli_query($conn,"delete from tables where id='$id'");
?>
<script type="text/javascript">
	alert("Deleted");
	window.location="tables.php"; 	
</script>