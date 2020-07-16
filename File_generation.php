<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

* {
  margin: 0;
  padding: 0;
  font-family: 'Lobster', cursive;
}

body, html {
  height:50%;
  background: url('https://phandroid.s3.amazonaws.com/wp-content/uploads/2014/06/kite.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#container{
  width:100%;
  min-height:100%;
  margin:0 auto;
  padding:0;
  overflow:auto;
}

.dropbox {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 480px;
  height: 170px;
  margin: auto;
  display:inline-block;
  color: #fff;
  text-align: center;
  line-height: 170px;
  font-size: 26px;
  text-shadow: 2px 3px #333;
  border: 4px dashed #fff;
  border-radius: 12px;
  background-color: rgba(52, 73, 94, 0.75);
  transition: all .2s ease-in-out;
}

.dropbox:hover {
  width: 520px;
  height:180px;
  line-height:180px;
  cursor: pointer;
  background-color: rgba(52, 73, 94, 0.5);
}

.dropbox.dragover {
  width: 420px;
  height: 170px;
  line-height: 170px;
  cursor: pointer;
}
.style_btn {
	color:white;
	border:none;
	background: none;
	margin-top:50px;
	font-size:30px;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container .buttons {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container .buttons:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.button {
  background-color: #5B84B1FF; /* blue */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border:dashed;
  cursor: pointer;
}
.button2 {border-radius: 12px;
visibility:hidden;}
.button3 {border-radius: 12px;
margin-top:50px;
padding-left:100px;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="contact.html">Contact</a>
  <div class="login-container">
    <form action="check_user.php" method="post" target="_self">
      <input type="text" placeholder="Username" name="user">
      <input type="password" placeholder="Password" name="password">
      <input type="submit" value="Login" class="buttons" id="different">
    </form>
  </div>
</div>
<section id="container">
  <section class="dropbox" id="	dropbox">
	<Button id = "mybtn" class="style_btn" onclick="document.getElementById('file-input').click();">Drop files here to upload<br>or</button><br>

	<form action="check_file_status.php" method="post" enctype="multipart/form-data">
	<input id="fileToUpload" class="button button3" type="file" accept="video/*" name="fileToUpload"/>
		<input type="hidden" id="mytext" name="mytext">
		<input type="submit" id = "extract" class="button button2" value="Extract video" onclick="myfunc()">
	</form>
	
	<script>
		var extract = document.getElementById("extract");
		var btn = document.getElementById("fileToUpload");
	
		btn.onclick = function() {
				extract.style.visibility = "visible";
		}
		
		extract.onclick = function() {
			var formData = new FormData();
			var file = $("#fileToUpload")[0].files[0];
			formData.append("file", file);
		}
	</script>
  </section>
</section>

</body>
</html>
