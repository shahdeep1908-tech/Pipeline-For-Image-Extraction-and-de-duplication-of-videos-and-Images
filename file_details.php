<?php
	exec('de_duplication.py');
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

.topnav .login-container button {
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

.topnav .login-container button:hover {
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
  background-color: #B0DFE5; /* blue */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border:dashed;
  cursor: pointer;
}
.button2 {border-radius: 12px;
margin-left:450px;
}
.container {
	margin-top:50px;
	margin-right:500px;
}

#hide {
	visibility:hidden;
}
#myProgress {
	visibility:hidden;
}
</style>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="insert_file_details.php" class="well form-horizontal" id="form1" method="post">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-3 control-label">Choose your file</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-facetime-video"></i></span><input id="browse" name="video" class="form-control" required="true" value="" type="file" accept="video/*"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><Button type="button" id="name" class="form-control" onclick="check_name();">Check File Details</Button></div>
                            </div>
                         </div>	
					<div id="hide">
						 <div class="form-group">
                            <label class="col-md-3 control-label">File name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span><span class="output form-control"></span></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label">File extension</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span><span class="output1 form-control"></span></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label">File size</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span><span class="output2 form-control"></span></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-3 control-label">File last modified</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span><span class="output3 form-control" placeholder="date modification date"></span></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-3 control-label">File geoLocation</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span><span class="output4 form-control"></span><br><span class="output5 form-control"></span></div>
                            </div>
                         </div>
							<input type="submit" id="change_color" class="button button2" value="Upload file details">
					</div>
					<div class="w3-light-grey w3-round-xlarge" id="myProgress">
						<div id="myBar" class="w3-container w3-blue w3-round-xlarge"></div>
					</div>
					 </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
	<script>
		function check_name() {
			var hide = document.getElementById("hide");
			hide.style.visibility = "visible";
			var filename;
			filename = document.querySelector('#browse').files[0].name;
			document.querySelector('.output').textContent = filename;
			fileName = document.querySelector('#browse').value; 
			var extension;
            extension = fileName.split('.').pop();
            document.querySelector('.output1').textContent = extension;
			fsize = document.querySelector('#browse').files[0].size;
			var fsize;
			fsize = fsize + ' bytes';
			document.querySelector('.output2').textContent = fsize;
			var filedate;
			filedate = document.querySelector('#browse').files[0].lastModifiedDate; 
			document.querySelector('.output3').textContent = filedate;
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else { 
				document.querySelector("Geolocation is not supported by this browser.").textContent;
				}
		}

		function showPosition(position) {
			var x;
			x = "Latitude: " + position.coords.latitude+" ";
			var y;
			y = "Longitude: " + position.coords.longitude;
			document.querySelector('.output4').textContent = x;
			document.querySelector('.output5').textContent = y;
			var hide1 = document.getElementById("myProgress");
			hide1.style.visibility = "visible";
			move();
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
            }
			xmlhttp.open("GET", "insert_file_details.php?name=" + filename + "&extension=" + extension + "&fsize=" +  fsize + "&filedate=" + filedate + "&x=" + x + "&y=" + y, true);
			xmlhttp.send();
		}
		var i = 0;
		function move() {
		if (i == 0) {
		i = 1;
		var elem = document.getElementById("myBar");
		var width = 1;
		var id = setInterval(frame, 10);
		function frame() {
			if (width >= 100) {
				document.getElementById("change_color").style.backgroundColor = "lightblue"
				
				
				;
				clearInterval(id);
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
  }
}
	</script>
</body>
</html>