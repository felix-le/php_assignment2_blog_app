<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top" style='min-height: 60px'>
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/bootstrap.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Home'){echo 'active';} ?>" href="home.php">Home</a>
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
					<li class="nav-link"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->