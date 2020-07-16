<!DOCTYPE html>
<html>
<head>
<meta content="noindex, nofollow" name="robots">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
body {
	background: url('https://phandroid.s3.amazonaws.com/wp-content/uploads/2014/06/kite.jpg') no-repeat center center fixed;
}
.title {
	margin-top:30px;
	margin-left: 180px;
}
.divB {
	margin-left: 180px;
}
.divD {
	width:220px;
}
.adjust {
	max-height: 480px;
	overflow-y : scroll;
}
#color {
	color: red;
}
#color1 {
	color: black;
}
</style>
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Admin Section</h2>
</div>
<div class="divB">
<div class="divD">
<p>User Details</p>
<a href="more_details.php">&nbsp;Geographic details...</a><br><br>
<a href="more_details.php">&nbsp;File details...</a><br><br>
<a href="file_generation.php" id="color">&nbsp;Logout...</a>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "azure"); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection, "select * from user_credentials");
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
#echo "<b><a href="Admin.php?id={$row['user_id']}">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
$query1 = mysqli_query($connection, "select * from user_credentials");
?>
<div class="adjust">
<?php
$id = 0;
while ($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
	$id++;
?>
<div class="form">
<form method="post" action="particular_details.php">
<h2><input type="submit" value="---User<?php  echo $row1['user_id']?>---" class="btn"></h2><br>
<!-- Displaying Data Read From Database -->
<span>User-ID:</span> <input type="text" value="<?php echo $row1['user_id']; ?>" style="border:none;" name="user_purpose"><br>
<span>Name:</span> <?php echo $row1['name']; ?><br>
<span>E-mail:</span> <?php echo $row1['email']; ?><br>
<span>Contact No:</span> <?php echo $row1['contact_no']; ?><br>
<span>City:</span> <?php echo $row1['city']; ?><br>
<span><center><a id="color1" href="update.php">update</a>
<a id="color" href="delete.php">delete</a></center></span>
</form>
</div>
<?php
}
?>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($connection); // Closing Connection with Server
?>
</body>
</html>