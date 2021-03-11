<?php

include "auth_session.php";
include "connection.php";
?>

 
 <html lang="en">
<head>
  <title>Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
	    <th>Id</th>
        <th>Name</th>
        <th>Email</th>
		<th>Message</th>
		<th>Product Code</th>
		<th>Delete</th>
		
		
      </tr>
    </thead>
    <tbody>
    
	<?php
	$res=mysqli_query($link, "select * from contactus");
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";	
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["message"]; echo "</td>";
		echo "<td>"; echo $row["productcode"]; echo "</td>";
		echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?><button type="submit" name="delete" class="btn btn-default">Delete</button></a> <?php echo "</td>";
		echo "</tr>";
	}
	
	?>
      
    </tbody>
  </table>
 <p><a href="logout.php">Logout</a></p>
 

</div>
</body>
</html>








