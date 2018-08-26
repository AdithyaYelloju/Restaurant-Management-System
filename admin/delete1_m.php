<?php
include 'connection.php';
$id=$_GET["id"];
//echo $id;
mysqli_query($conn,"delete from menu where id='$id'");
?>
<script type="text/javascript">
	alert("Deleted");
	
	window.location="display_menu.php"; 	
	
	
</script>