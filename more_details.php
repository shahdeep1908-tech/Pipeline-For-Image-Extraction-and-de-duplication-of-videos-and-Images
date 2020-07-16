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
<p>Geographic Details</p>
<a href="Admin.php">&nbsp;&nbsp;User details...</a><br><br>
<a href="video_file_details.php">&nbsp;&nbsp;File details...</a><br><br>
<a href="image_file_details.php">&nbsp;&nbsp;Image File details...</a><br><br>
<a href="file_generation.php" id="color">&nbsp;&nbsp;Logout...</a>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "azure"); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection, "select * from geographic_details");
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
#echo "<b><a href="Admin.php?id={$row['user_id']}">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
$query1 = mysqli_query($connection, "select * from geographic_details");
?>
<div class="adjust">
<?php
$id = 0;
while ($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
	$id++;
?>
<div class="form">
<a href="more_details.php"><h2>---User<?php echo $row1['id']?>---</h2></a>
<!-- Displaying Data Read From Database -->
<span>ID:</span> <?php echo $row1['id']; ?><br>
<span>Username:</span> <?php echo $row1['username']; ?><br>
<span>Video Name:</span> <?php echo $row1['video_name']; ?><br>
<span>City:</span> <?php echo $row1['city']; ?><br>
<span>State:</span> <?php echo $row1['state']; ?><br>
<span>Country:</span> <?php echo $row1['country']; ?><br>
<span>Date:</span> <?php echo $row1['date']; ?><br>
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