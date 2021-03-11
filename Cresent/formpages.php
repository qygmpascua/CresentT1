<?php
 include "connection.php";
 ?>
 
 <html lang="en">
<head>
  <title>Order Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="contactus.css">
</head>

<body>
<div class="container">
<div class="col-lg-4">
  <h2>Order Form</h2>
  <form action="" name=form1 method="post">
  
    <div class="form-group">
      <label for="firstname">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="message">Message:</label>
      <textarea type="text" class="form-control" id="message" placeholder="Enter message" name="message"></textarea>
    </div>
	<div class="form-group">
      <label for="productcode">Product Code:</label>
      <input type="text" class="form-control" id="productcode" placeholder="Enter product code" name="productcode">
    </div>

    <button type="submit" name="send" class="btn btn-default">Send Order</button>

  </form>
</div>
</div>



<?php
if(isset($_POST["send"]))
{
mysqli_query($link, "insert into contactus values(NULL,'$_POST[name]','$_POST[email]','$_POST[message]','$_POST[productcode]')");
}

?>

</body>
</html>