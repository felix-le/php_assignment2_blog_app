<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top" style='min-height: 60px'>
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/bootstrap.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				<?php 
  				// Call session start if it hasn't been called already at the first time
					if(session_status() == PHP_SESSION_NONE){
						session_start();
					};
				?>
				<?php
					if(empty($_SESSION['username'])){
				?>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Home'){echo 'active';} ?>" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'About'){echo 'active';} ?>" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Services'){echo 'active';} ?>" href="services.php">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Contact'){echo 'active';} ?>" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Login'){echo 'active';} ?>" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Login'){echo 'active';} ?>" href="register.php">Register</a>
					</li>
					<?php
					} else{ ?>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Home'){echo 'active';} ?>" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'About'){echo 'active';} ?>" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Services'){echo 'active';} ?>" href="services.php">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Contact'){echo 'active';} ?>" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'profile'){echo 'active';} ?>" href="profile.php"><?php
							echo $_SESSION['username'];
						?></a>
					</li>
					<li class="nav-link"><a href="logout.php">Logout</a></li>

					<?php }?>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->