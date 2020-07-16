<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="login.css">
<style>
.min {
	height:35px;
}
</style>
</head>
<body>
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show" class="see" checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show" class="see">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
			<form method="post" action="check_user.php">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Email" required="true" name="email">
				<input type="password" placeholder="Password" required="true" name="password">
				<input type="submit" value="Login">
				<a href="">Forgot password?</a>
			</form>
			</div>
			<div class="register-show">
			<form method="post" action="insert_user.php">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email" required="true" name="email" class="min">
				<input type="text" placeholder="Username" required="true" name="username" class="min">
				<input type="password" placeholder="Password" required="true" name="password" class="min">
				<input type="password" placeholder="Confirm Password" required="true" class="min">
				<input type="text" placeholder="Contact number" required="false" class="min" name="contact">
				<input type="text" placeholder="City" required="false" class="min" name="city">
				<input type="submit" value="Register">
			</form>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});

$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
</script>
</body>
</html>