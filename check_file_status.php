<?php
$target_dir = "video_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo " ";
    $uploadOk = 1;
  } else {
    echo "File is not a video.";
    $uploadOk = 0;
  }
}

// Check if file already exists
elseif (file_exists($target_file)) {
  echo '<script>alert("Sorry, File Already Exists...\nChoose another File.");
			window.location.href = "file_generation.php";
			</script>';
  $uploadOk = 0;
}

// Allow certain file formats
elseif($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov"
&& $imageFileType != "gif" ) {
  echo "Sorry, only mp4, avi, mov & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
elseif ($uploadOk == 0) {
  echo '<script>alert("Sorry your File was not Uploaded.");
			window.location.href = "file_generation.php";
			</script>';
// if everything is ok, try to upload file
} 
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo '<script>alert("Your Video has been uploaded Successfully.");
			window.location.href = "login.php";
			</script>';
  } else {
		echo '<script>alert("Sorry, there was an error uploading your file.");
			window.location.href = "file_generation.php";
		  </script>';
  }
}
?>