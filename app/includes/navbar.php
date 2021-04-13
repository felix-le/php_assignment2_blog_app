<!--- Navigation -->
<?php 
  				// Call session start if it hasn't been called already at the first time
					if(session_status() == PHP_SESSION_NONE){
						session_start();
					};
				?>
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top" style='min-height: 60px'>
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
					<img style="max-width: 50px; max-height: 50px;" 
						src="uploads/img/<?php echo $_SESSION['logo_file_name'] === null ? 'bootstrap.png': $_SESSION['logo_file_name']; ?>"  
					/>
			</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
		
				<?php
					if(empty($_SESSION['username'])){
				?>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Home'){echo 'active';} ?>" href="index.php">Home</a>
					</li>
					<?php 

					try{
						include ("config.php");
						$sql = "
						SELECT * FROM php_a2_pages;
						";
						$cmd = $db -> prepare($sql);
						$cmd ->execute();
						// set table variable

						$pageData =  $cmd->fetchAll(); 


						foreach ($pageData as $v){
							echo '<li class="nav-item">';
							echo '<a class="nav-link' ;
							echo  $page == $v['page_name'] ? 'active" ':'"';
							echo  'href="'.$v['page_name'] . '.php'    . '">';
							echo  $v['page_name'];
							echo '</a>';
							echo '	</li>';
						}
						$db = null;
					}catch(PDOException $e){
							// echo "Connection failed" . $e -> getMessage();
							header('Location: error.php');
							exit();
						}
					?>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
					<?php
					} else{ ?>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'Home'){echo 'active';} ?>" href="index.php">Home</a>
					</li>
					<?php 

					try{
						include ("config.php");
						$sql = "
						SELECT * FROM php_a2_pages;
						";
						$cmd = $db -> prepare($sql);
						$cmd ->execute();
						// set table variable

						$pageData =  $cmd->fetchAll(); 


						foreach ($pageData as $v){
							echo '<li class="nav-item">';
							echo '<a class="nav-link' ;
							echo  $page == $v['page_name'] ? 'active" ':'"';
							echo  'href="'.$v['page_name'] . '.php'    . '">';
							echo  $v['page_name'];
							echo '</a>';
							echo '	</li>';
						}
						$db = null;
					}catch(PDOException $e){
							// echo "Connection failed" . $e -> getMessage();
							header('Location: error.php');
							exit();
						}
					?>
					<li class="nav-item">
						<a class="nav-link <?php if($page == 'profile'){echo 'active';} ?>" href="profile.php"><?php
							echo $_SESSION['username'];
						?></a>
					</li>

					<li class="nav-item"><a href="logout.php" class="text-white nav-link" >Logout</a></li>

					<?php }?>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->