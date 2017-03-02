<!DOCTYPE html>
<html>
<head>
	<?php include 'incl/config.php'; ?>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/res/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
	<nav class="main-navbar">
		<div class="container">
			<div class="navbar">
				<ul class="menu pull-left">
					<li><a href="">Home</a></li>
					<li><a href="">Progress</a></li>
					<li><a href="">Profiles</a></li>
				</ul>
					<div class="searchbox">
						<form>
							<span class="icons">
								<div><i class="fa fa-search"></i></div>
							</span>
							<input type="text" name="searchquery" class="searchquery">
						</form>
					</div>
				<ul class="menu pull-right">
					
					<li><a href=""><i class="fa fa-bell"></i></a></li>
					<li><a href=""><i class="fa fa-cog"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-body">
		<div class="container">

		<!-- Left -->
		
			<div class="wrap-left plain-wrap">

				<div class="container-wrap" id="user">
					<div class="user-wrap">
						<div class="user pi">
							<img src="img/profiles.jpg">
						</div>
						<div class="user pn">
							<span><?php echo $_SESSION['fullname']; ?></span>
							<span><?php echo $_SESSION['title']; ?></span>
						</div>
					</div>
				</div>

				<div class="container-wrap">
					<div class="cw-title">Comunity</div>
					<div class="cw-bullet">
						<div class="bullet">
							<img src="img/profiles.jpg">
						</div>
						<div class="text">White Hat Comunity</div>
					</div>
					<div class="cw-bullet">
						<div class="bullet"><span></span></div>
						<div class="text">White Hat Comunity</div>
					</div>
				</div>

				<div class="container-wrap">
					<div class="cw-title">Class</div>
					<div class="cw-list">
						<div class="item"><span>5th Grade Math Class</span></div>
						<div class="item"><span>7th Grade Science Class</span></div>
						<div class="item"><span>5th Grade Biologic Class</span></div>
					</div>
				</div>

			</div>

		<!-- Center -->	

			<div class="wrap-center plain-wrap">

				<div class="container-wrap">
					<div class="post-head">Post Something</div>
					<div class="content-wrap">
						<textarea class="cw-form" placeholder="How Are You <?php echo $_SESSION['fullname']; ?> ?" id="post-text"></textarea>
						<select class="cw-form">
							<option>Some Group</option>
							<option>Some Group</option>
							<option>Some Group</option>
							<option>Some Group</option>
						</select>
						<div>
							<div class="form-group align-r"><a href="" class="link">Direct Message</a> <span class="devider">or</span> <button class="btn btn-mt">Post</button></div>
						</div>
					</div>
				</div>

				<div class="pagebreak">
					<span>Recent Post</span>
				</div>

				<div class="container-wrap post">
					<div class="content-wrap">
						<div class="post-auth">
							<div class="post-pi">
								<img src="img/anna.jpg">
							</div>
							<div class="post-pd">
								<span class="post-info">
									<a href="#" class="link post-name">Jajanken Starta</a>
									<span class="devider">to</span>
									<a href="#" class="link post-name">Some Group</a>
								</span>
								<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
							</div>
						</div>	
						<div class="post-content type-std">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco  laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
						<div class="action-bar">
							<a href="#" class="link dark">Like</a><div class="dot"></div><a href="#" class="link dark">Share</a>
						</div>
					</div>
					<div class="comment">
						<div class="comment-wrap">
							<div class="user pi">
								<img src="img/profiles.jpg">
							</div>
							<form>
								<textarea cols="1" rows="1" class="cw-form" name="comment-text" placeholder="Type Comment ...."></textarea>
							</form>
						</div>
					</div>
				</div>

				<div class="container-wrap post">
					<div class="content-wrap">
						<div class="post-auth">
							<div class="post-pi">
								<img src="img/anna.jpg">
							</div>
							<div class="post-pd">
								<span class="post-info">
									<a href="#" class="link post-name">Jajanken Starta</a>
									<span class="devider">to</span>
									<a href="#" class="link post-name">Some Group</a>
								</span>
								<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
							</div>
						</div>	
						<div class="post-content type-std">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco  laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
						<div class="action-bar">
							<a href="#" class="link dark">Like</a><div class="dot"></div><a href="#" class="link dark">Share</a>
						</div>
					</div>
					<div class="comment">
						<div class="comment-wrap">
							<div class="user pi">
								<img src="img/profiles.jpg">
							</div>
							<form>
								<textarea cols="1" rows="1" class="cw-form" name="comment-text" placeholder="Type Comment ...."></textarea>
							</form>
						</div>
					</div>
				</div>

				<div class="container-wrap post">
					<div class="content-wrap">
						<div class="post-auth">
							<div class="post-pi">
								<img src="img/anna.jpg">
							</div>
							<div class="post-pd">
								<span class="post-info">
									<a href="#" class="link post-name">Jajanken Starta</a>
									<span class="devider">to</span>
									<a href="#" class="link post-name">Some Group</a>
								</span>
								<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
							</div>
						</div>	
						<div class="post-content type-std">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco  laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
						<div class="action-bar">
							<a href="#" class="link dark">Like</a><div class="dot"></div><a href="#" class="link dark">Share</a>
						</div>
					</div>
					<div class="comment">
						
						<div class="comment-wrap">
							<div class="comments post-auth">
								<div class="post-pi">
									<img src="img/anna.jpg">
								</div>
								<div class="post-pd">
									<span class="post-info">
										<a href="#" class="link post-name">Jajanken Starta</a>
										Mastah rumah dimana ?
									</span>
									<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
								</div>
							</div>
						</div>

						<div class="comment-wrap">
							<div class="comments post-auth">
								<div class="post-pi">
									<img src="img/anna.jpg">
								</div>
								<div class="post-pd">
									<span class="post-info">
										<a href="#" class="link post-name">Jajanken Starta</a>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</span>
									<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
								</div>
							</div>
						</div>

						<div class="comment-wrap">
							<div class="comments post-auth">
								<div class="post-pi">
									<img src="img/anna.jpg">
								</div>
								<div class="post-pd">
									<span class="post-info">
										<a href="#" class="link post-name">Jajanken Starta</a> Hei Jude
									</span>
									<span class="post-time"><span class="type-std">-2 Octagus 20FX</span></span>
								</div>
							</div>
						</div>

						<div class="comment-wrap">
							<div class="user pi">
								<img src="img/profiles.jpg">
							</div>
							<form action="index.php">
								<textarea cols="1" rows="1" class="cw-form" name="comment-text" placeholder="Type Comment ...."></textarea>
							</form>
						</div>
					</div>
				</div>

			</div>

		<!-- Right -->

			<div class="wrap-right plain-wrap">
				
				<div class="container-wrap">
					<div class="cw-title">
						To Do
					</div>
					<div class="cw-list">
						<div class="item"><span>Creating Mindmap</span></div>
						<div class="item"><span>Asign Second Submission</span></div>
						<div class="item"><span>Creating Mindmap</span></div>
					</div>
				</div>

				<div class="container-wrap">
					<div class="cw-title">
						Task
					</div>
					<div class="cw-list">
						<div class="item"><span>Creating Mindmap</span></div>
						<div class="item"><span>Asign Second Submission</span></div>
						<div class="item"><span>Creating Mindmap</span></div>
					</div>
				</div>
			
			</div>
			
		</div>
	</div>
</body>

	<script type="text/javascript" src="http://localhost/res/js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</html>