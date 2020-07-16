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
	$email = $_POST['email'];
	$user = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	
	$select = "INSERT INTO user_credentials (name, email, username, password, contact_no, city) VALUES ('$user', '$email','$user','$password','$contact','$city')";
	$queryresult = mysqli_query($conn, $select);
	$row = mysqli_fetch_array($queryresult, MYSQLI_ASSOC);
	$count = mysqli_num_rows($queryresult);
	
	$select1 = "select user_id from user_credentials where email like '$email' AND password like '$password'";
	$queryresult1 = mysqli_query($conn, $select1);
	$row1 = mysqli_fetch_array($queryresult1, MYSQLI_ASSOC);
	$select2 = "INSERT INTO geographic_details (user_id, username) VALUES ('$row1','$user')";
	$queryresult2 = mysqli_query($conn, $select2);
	$row2 = mysqli_fetch_array($queryresult2, MYSQLI_ASSOC);
	
	$select3 = "SELECT username FROM user_credentials WHERE email line '$email'";
	$queryresult3 = mysqli_query($conn, $select3);
	$row3 = mysqli_fetch_array($queryresult3, MYSQLI_ASSOC);
	
	$second = 0;
	$videoFile = "video_uploads/".$row3;
	$imgOut = "images/".$user.".jpg";
	exec("ffmpeg -i ".$videoFile." -r 1".$imgOut."%04d.jpg");  
	
	
	$_SESSION["currentuser"]=$email;
	Header("Location: user_details.php");
	echo "Welcome "." $queryresult";
}
?>