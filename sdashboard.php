<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Examintion Systems</title>
    <link href="images/icon.png" rel="shortcut icon" type="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font.css" rel="stylesheet" />
	<link href="css/all.css" rel="stylesheet" />
	<link href="css/fontawesome.css" rel="stylesheet" />
	<link href="css/fontawesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
  <body>
	<img src="images/background1.jpg" style="position:absolute; width:100%; height:100%;margin:0;padding:0;opacity:0.1;" > 
	<div class="whole">
	
	<div class="container">
		<div class="content">
			<div class="desh_main">
				<div class="sidebar">
					<div class="sidebar_logo">
						<a href="#"><img src="images/p.png"></a>
					</div>
					<div class="sidebar_nav">
						<ul class="navi">
							<li><a href="sdashboard.php" onclick='change_pagename("Home")' class="on"> <i class="fas fa-home"></i> Home</a></li>
							<li><a href="snotifications.php" onclick='change_pagename("Notifications")' > <i class="fas fa-bell"></i> Notifications</a></li>
							<li><a href="exams.php" onclick='change_pagename("Exams")' > <i class="fas fa-eye-dropper"></i> Exams</a></li>
							<li><a href="sstandings.php" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="student_profile.php" onclick='change_pagename("My Profile")' > <i class="fas fa-user-circle"></i> My Profile</a></li>
							<li><a  href="signout.php" > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down">
						<h4>How Online Examination System Works</h4><hr>
						<p>
						Our online test generator will help you creating your online exam with timer. You’ve decided to give an online examination. Now you’re wondering which steps to follow to accomplish that. Good question! This article will you show a small overview that you will have to take for putting on an online examination.
						<h4>Find an online examination software</h4>
						The first step you’ll have to take is to find online examination system. You can surf on the Internet and see different kinds of online examination systems around. You can start with our user-friendly Exam Builder to create your online exam J
						<h4>Set up the exam</h4>
						It’s easy to get started with our online examination system. First you are able to write a short introduction.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
    <script>
		
		
		$('#current_page').html("Home");
		
		function change_pagename(n){
			$('#current_page').html(n);
		}
		
		
	</script>
  </body>
</html>