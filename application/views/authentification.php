<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 29/05/2018
 * Time: 10:45 AM
 */
?>
<?php $this->load->view('alert'); ?>
<div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">

	<header class="bmd-layout-header">
		<div class="navbar navbar-light bg-faded">
			<button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
				<span class="sr-only">Toggle drawer</span>
				<i class="material-icons">menu</i>
			</button>
			<div class="nav-item">
				<button class="btn" type="button" id="signInButton">Sign in</button>
				<button class="btn" type="button" id="signUpButton">Sign up</button>
			</div>
		</div>
	</header>
	<div class="services-section black-trans-bg">
		<div class="services-section-banner"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
					<div class="services-head">
						<h2 class="services-title">SUPFILE</h2>
						<span class="services-title-border"></span>
						<p class="services-text">Your files at your fingertips</p>
					</div>
					<div class="services-content">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-2">
									<div class="service-box">
										<div class="clearfix">
											<div class="iconset">
												<span class="glyphicon glyphicon-cog icon"></span>
											</div>
											<div class="servicesB-content">
												<h4>Online storage space across Internet</h4>
												<p>Interactively procrastinate high-payoff content without backward
													compatible data. Quickly cultivate optimal</p>
											</div>
										</div>
									</div>
									<div class="service-box">
										<div class="clearfix">
											<div class="iconset">
												<span class="glyphicon glyphicon-cog icon"></span>
											</div>
											<div class="servicesB-content">
												<h4>Your files accessible across web and mobile</h4>
												<p>Interactively procrastinate high-payoff content without backward
													compatible data. Quickly cultivate optimal
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-2">
									<div class="service-box">
										<div class="clearfix">
											<div class="iconset">
												<span class="glyphicon glyphicon-cog icon"></span>
											</div>
											<div class="servicesB-content">
												<h4>You have 30GB to store files</h4>
												<p>Interactively procrastinate high-payoff content without backward
													compatible data. Quickly cultivate optimal
													Interactively
													procrastinate high-payoff content</p>
											</div>
										</div>
									</div>
									<div class="service-box">
										<div class="clearfix">
											<div class="iconset">
												<span class="glyphicon glyphicon-cog icon"></span>
											</div>
											<div class="servicesB-content">
												<h4>Use Google and Facebook authentification</h4>
												<p>Interactively procrastinate high-payoff content without backward
													compatible data. Quickly cultivate optimal</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="modal" tabindex="-1" role="dialog" id="rgpd">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title form-signin-heading">The new European data protection law requires us to
						inform you of the following before you use our website: </h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body col-md-12">
					<p>We use cookies and other technologies to customize your experience, perform analytics and
						deliver personalized advertising on our sites, apps and newsletters and across the Internet
						based on your interests. By clicking “I agree” below, you consent to the use by us and our
						third-party partners of cookies and data gathered from your use of our platforms.
						See our Privacy Policy and Third Party Partners to learn more about the use of data and your
						rights. You also agree to our Terms of Service. </p>
					<div class="col-md-12 center">
							<input class="checkbox" id="agree" type="checkbox">
							<label class="agree-lbl" for="agree">I agree </label>
							<button onclick="clickRgpd()" class="btn btn-success">Continue to site</button>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="modal" tabindex="-1" role="dialog" id="signIn">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title form-signin-heading">Please sign in</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
										Sign in with email
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin" method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/Authentification/emailAuthentification">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmailSupfile" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email" name="emailaddress">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPasswordSupfile" class="form-control" placeholder="Password"
											   required="" type="password" name="emailpassword">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit" id="authSupfile">Sign in</button>
									</form>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
<!--									<button class="btn btn-link collapsed" data-toggle="collapse"-->
<!--											data-target="#collapseTwo" aria-expanded="false"-->
<!--											aria-controls="collapseTwo">-->
<!--										Sign in with Facebook-->
<!--									</button>-->
									<fb:login-button
										scope="public_profile,email"
										onlogin="checkLoginState();"> Sign in with Facebook
									</fb:login-button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin" method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/Authentification/facebookAuthentification">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmail" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPassword" class="form-control" placeholder="Password"
											   required="" type="password">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
										Sign in with Google
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin" method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/Authentification/googleAuthentification">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmail" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPassword" class="form-control" placeholder="Password"
											   required="" type="password">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="modal" tabindex="-1" role="dialog" id="signUp">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title form-signin-heading">Please sign up</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="accordion">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
										Sign in with email
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin" method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/Authentification/emailSignUp">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmail" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email" name="emailSignUp">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPassword" class="form-control" placeholder="Password"
											   required="" type="password" name="passwordSignUp">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseTwo" aria-expanded="false"
											aria-controls="collapseTwo">
										Sign in with Facebook
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmail" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPassword" class="form-control" placeholder="Password"
											   required="" type="password">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
										Sign in with Google
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								 data-parent="#accordion">
								<div class="card-body">
									<form class="form-signin">
										<label for="inputEmail" class="sr-only">Email address</label>
										<input id="inputEmail" class="form-control" placeholder="Email address"
											   required="" autofocus="" type="email">
										<label for="inputPassword" class="sr-only">Password</label>
										<input id="inputPassword" class="form-control" placeholder="Password"
											   required="" type="password">
										<p class="espace"></p>
										<div class="checkbox">
											<label>
												<input value="remember-me" type="checkbox"> Remember me
											</label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
