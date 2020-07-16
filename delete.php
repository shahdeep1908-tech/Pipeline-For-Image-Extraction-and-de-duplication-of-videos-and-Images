<?php
$id = 1;
$success = false;
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "azure";

	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
    $funcao1="delete from user_credentials where user_id = " . $id;
	$funcao2="delete from geographic_details where user_id = " . $id;
	$funcao3="delete video_file_details where user_id = " . $id;
	$funcao4="delete from ssim_images where user_id = " . $id;
    $result1=mysqli_query($conn, $funcao1);
	$result2=mysqli_query($conn, $funcao2);
	$result3=mysqli_query($conn, $funcao3);
	$result4=mysqli_query($conn, $funcao4);
    $success = true;
header("Location: Admin.php");
?>
