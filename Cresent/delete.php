<?php

include "connection.php"; 

$id = $_GET['id']; 

mysqli_query($link,"delete from contactus where id = '$id'"); 
?>

<script type="text/javascript">
window.location="dashboard.php";
</script>