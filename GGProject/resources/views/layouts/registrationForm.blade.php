<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> Sign Up </label>
		<div class="login-form">
			<form class="sign-in-htm" method = "POST" action="/login">
			{{ csrf_field() }}
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email_log" type="email" class="input" name="email" required>
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password_log" type="password" class="input" data-type="password" name="password" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</form>
			<form class="sign-up-htm" method = "POST" action="/register">
			{{ csrf_field() }}
				<div class="group">
					<label for="name" class="label">Username</label>
					<input id="name" type="text" class="input" name="name" required>
				</div>

				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="email" class="input" name="email" required>
				</div>

				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" data-type="password" name="password" required>
				</div>

				<div class="group">
					<label for="password_confirmation" class="label">Confirm password</label>
					<input id="password_confirmation" type="password" class="input" data-type="password" name="password_confirmation" required>
				</div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
			</form>
		</div>
	</div>
</div>