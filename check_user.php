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
	$password = $_POST['password'];
	$user = $_POST['user'];
	$select = "select email from user_credentials where username like '$user' OR email like '$email' AND password like '$password'";
	$queryresult = mysqli_query($conn, $select);
	$row = mysqli_fetch_array($queryresult, MYSQLI_ASSOC);
	$count = mysqli_num_rows($queryresult);
	
	if($user == "Admin" AND $password == "Admin" OR $email == "Admin")
	{
		Header("Location: Admin.php");
		echo "Welcome "." $user";
	}
	
	elseif($count == 1)
	{
		$select1 = "select user_id from user_credentials where username like '$user' OR email like '$email' AND password like '$password'";
		$queryresult1 = mysqli_query($conn, $select1);
		$row1 = mysqli_fetch_array($queryresult1, MYSQLI_ASSOC);
		$select2 = "INSERT INTO geographic_details (user_id, username) VALUES ('$row1','$email')";
		$queryresult2 = mysqli_query($conn, $select2);
		$row2 = mysqli_fetch_array($queryresult2, MYSQLI_ASSOC);
	
		$_SESSION["currentuser"]=$email;
		Header("Location: user_details.php");
		echo "Welcome "." $email";
	}
	else
	{
		echo '<script>alert("Incorrect E-mail or Password.");
			window.location.href = "login.php";
		  </script>';
		?>
		<?php
	}
}
?>