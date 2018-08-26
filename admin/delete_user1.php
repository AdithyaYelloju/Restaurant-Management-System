<?php
include 'connection.php';
$id=$_GET["id"];
//echo $id;
mysqli_query($conn,"delete from user where id='$id'");
?>
<script type="text/javascript">
	alert("Deleted");
	window.location="user_list.php"; 	
	
	
</script>