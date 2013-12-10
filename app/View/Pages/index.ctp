<?php echo $this->Html->script('holder'); ?>

<div class="jumbotron" id="welcome-screen">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 welcome-logo">
			<img src="holder.js/300x400" />
			</div>
			<div class="col-md-5">
				<p class="welcome-desc">
				<h2>Are you up for the next CCIS Quiz Show?</h2>
				 <p>Find a partner and take the ultimate quiz to have the chance to make it as contestants of the upcoming Quiz Show that will happen this December 11, 2013!</p></p>
				<p><a class="btn btn-primary btn-lg next-page">Register</a></p>
			</div>
		</div>
	</div>
</div>
<div id="registerform">
	<div class="container">
		<form class="form-signin" method="post" action="../quiz">
			<h1 class="form-signin-heading text-center">Sign up!</h1>
			<br />
			<input name="team" type="text" class="form-control" placeholder="Team Name">
			<input name="member[]" type="text" class="form-control" placeholder="Team Member # 1's Name">
			<input name="member[]" type="text" class="form-control" placeholder="Team Member # 2's Name">
			<input name="email" type="text" class="form-control" placeholder="Email address">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Take the QUIZ</button>
		</form>
	</div>
</div>
