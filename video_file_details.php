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
	width:230px;
}
.adjust {
	max-height: 500px;
	overflow-y : scroll;
}
#color {
	color: red;
}
#color1 {
	border:solid;
	color: blue;
}
#color2 {
	border:solid;
	color: blue;
	margin-right:30px;
}
#h2 {
	color: blue;
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
<p>Video File Details</p>
<a href="Admin.php">&nbsp;&nbsp;&nbsp;&nbsp;User details...</a><br><br>
<a href="more_details.php">&nbsp;&nbsp;&nbsp;&nbsp;Geographic details...</a><br><br>
<a href="image_file_details.php">&nbsp;&nbsp;&nbsp;&nbsp;Image File details...</a><br><br>
<a href="file_generation.php" id="color">&nbsp;&nbsp;&nbsp;&nbsp;Logout...</a>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "azure"); // Selecting Database
//MySQL Query to read data
$query = mysqli_query($connection, "select * from video_file_details");
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
#echo "<b><a href="Admin.php?id={$row['user_id']}">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
$query1 = mysqli_query($connection, "select * from video_file_details");
?>
<div class="adjust">
<?php
$id = array();
$i = 0;
while ($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
	$i++;
?>
<div class="form">
<form method="post" action="extract.php">
<?php $id = $row1['user_id'] ?>
<input type="hidden" name="getvalue" value="<?php  echo $id."[".$row1['user_id']."]" ?>">
<h2 id="h2">---User<?php  echo $row1['user_id']?>---</h2><br>
<!-- Displaying Data Read From Database -->
<span>ID:</span> <?php echo $row1['id']; ?><br>
<span>Username:</span> <?php echo $row1['username']; ?><br>
<span>Video File Name:</span> <?php echo $row1['actual_file_name']; ?><br>
<span>File Size:</span> <?php echo $row1['file_size']; ?><br>
<span>File Extension:</span> <?php echo $row1['file_extension']; ?><br>
<span>File Resolution:</span> <?php echo $row1['file_resolution']; ?><br>
<span>Latitude:</span> <?php echo $row1['latitude']; ?><br>
<span>Longitude:</span> <?php echo $row1['longitude']; ?><br><br>
<span><center><input type="submit" id="color1" value="Extract images on server"></span>
<h6><span><center><a href="duplication.php" id="color2">Apply For De - Duplication</a></center></span></h6>
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