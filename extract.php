<?php  
error_reporting(E_ERROR | E_PARSE);
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "azure"); // Selecting Database
//MySQL Query to read data
$select = "select username from video_file_details where user_id like 10";
$query = mysqli_query($connection, $select);
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
$row = implode(" ",$row);

$select1 = "select actual_file_name from video_file_details where user_id like 10";
$query1 = mysqli_query($connection, $select1);
$row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC);
$row1 = implode(" ",$row1);

$dir = mkdir('Images/'.$row.'/');
 // Full path to ffmpeg (make sure this binary has execute permission for PHP)  
 $ffmpeg = "ffmpeg";  
 // Full path to the video file  
 $videoFile = ("video_uploads/".$row1);  
 // Full path to output image file (make sure the containing folder has write permissions!)  
 $imgOut = "Images/".$row."/".$row;  
 // Number of seconds into the video to extract the frame  
 $second = 0;  
 // Setup the command to get the frame image  
 $cmd = $ffmpeg." -i ".$videoFile." -r 1 ".$imgOut."%01d.jpg";  
 // Get any feedback from the command  
 $feedback = `$cmd`;  
 // Use $imgOut (the extracted frame) however you need to   
 // ...   
 mysqli_close($connection); // Closing Connection with Server
 echo '<script>alert("Your Video has been Extracted on Server");
			window.location.href = "video_file_details.php";
		  </script>';
 ?>  