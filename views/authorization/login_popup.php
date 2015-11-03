<div class="body-shadow-out" id="body-shadow-out-x" <?php if ($auth_error !== 42) print ' style="display:block" ';?> onclick="closePopUp()">
</div>	

<div class="body-shadow-in" id="body-shadow-in-x" <?php if ($auth_error !== 42) print ' style="display:block" ';?>>


	<div id="dash1">
		<div class="login-header">
			<p>LOGIN</p>
			<div class="close-form" onclick="closePopUp()">
				<img class="close-grey" src="/template/img/login pop-up/close-icon.svg" alt="exit">
				<img class="close-red" src="/template/img/login pop-up/close-icon-red.svg" alt="exit">
			</div>
		</div>
		<p class="choose-login-or-register">OR USE YOUR EMAIL ADDRESS</p>
		<a href="#"><div class="use" id="use-login" onclick="showLoginWindow()">Login</div></a>
		<a href="#"><div class="use" id="use-register" onclick="showSignUpWindow()">Sing up</div></a>
	</div>


	<div id="dash2">
		<div class="login-header">
			<p>LOGIN</p>
			<div class="close-form" onclick="closePopUp()">
				<img class="close-grey" src="/template/img/login pop-up/close-icon.svg" alt="exit">
				<img class="close-red" src="/template/img/login pop-up/close-icon-red.svg" alt="exit">
			</div>
		</div>
		<div class="login-form">
			<form class="form" role="form" action="/login" method="POST">
				<div class="form-group">
					<label for="name">username</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="admin" required>
				</div>

				<div class="form-group">
					<label for="name">password</label>
					<input class="form-control" type="password" name="pass" placeholder="123" required>
				</div>
				
				<div class="form-group">
					<input class="btn btn-danger" type="submit" name="submit" value="Login">
				</div>		
			</form>
		</div>
		<a class="login-footer" href="#" onclick="backToFirstPopUp()"><p>Back</p></a>
	</div>


	<div id="dash3">
		<div class="login-header">
			<p>LOGIN</p>
			<div class="close-form" onclick="closePopUp()">
				<img class="close-grey" src="/template/img/login pop-up/close-icon.svg" alt="exit">
				<img class="close-red" src="/template/img/login pop-up/close-icon-red.svg" alt="exit">
			</div>
		</div>
		<div class="login-form">
			<form class="form" role="form" action="/" method="POST">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input class="form-control" type="text" name="name" id="name" required>
				</div>

				<div class="form-group">
					<label for="email">Email Address</label>
					<input class="form-control" type="email" name="name" id="email" required>
				</div>

				<div class="form-group">
					<label for="name">Password</label>
					<input class="form-control" type="password" name="pass" required>
				</div>
				
				<div class="form-group">
					<input class="btn btn-info" type="submit" name="register-submit" value="Register">
				</div>		
			</form>
		</div>
		<a class="login-footer" href="#"  onclick="backToFirstPopUp()"><p>Back</p></a>
	</div>


	<div id="dash4" <?php if ($auth_error !== 42) print ' style="display:block" ';?>>
		<div class="login-header">
				<p>LOGIN</p>
				<div class="close-form" onclick="closePopUp()">
					<img class="close-grey" src="/template/img/login pop-up/close-icon.svg" alt="exit">
					<img class="close-red" src="/template/img/login pop-up/close-icon-red.svg" alt="exit">
				</div>
			</div>		
		<p class="choose-login-or-register"><?php print $auth_error; ?></p>
		<a class="login-footer" href="#" onclick="backToFirstPopUp()"><p>Back</p></a>
	</div>


</div>


	
