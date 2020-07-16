<?php
	exec('de_duplication.py');
	echo '<script>alert("De - Duplication has been Completed");
			window.location.href = "video_file_details.php";
		  </script>';
?>