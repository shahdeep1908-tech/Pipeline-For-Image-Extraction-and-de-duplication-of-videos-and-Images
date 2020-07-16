<?php
session_start();
?>
<?php
/* @var $_POST type */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "azure";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn) {
	$name = ($_POST['filename']);
	$extension = ($_POST['extension']);
	$size = ($_POST['fsize']);
	$date = ($_POST['filedate']);
	$lon = ($_POST['x']);
	$lon = ($_POST['y']);
	
	$select = "INSERT INTO video_file_details (actual_file_name, file_size, file_extension, latitude, longitude, last_modified_date) VALUES ('$name', '$size', '$extension', '$lat', '$lon', '$date')";
	$queryresult = mysqli_query($conn, $select);
	$row = mysqli_fetch_array($queryresult, MYSQLI_ASSOC);
	$count = mysqli_num_rows($queryresult);
	
	Header("Location: thank_you.html");
	echo "Welcome "." $queryresult";
}
?>