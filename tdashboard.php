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
							<li><a href="tdashboard.php" onclick='change_pagename("Home")' class="on"> <i class="fas fa-home"></i> Home</a></li>
							<li><a href="create_admin.php" onclick='change_pagename("Create Admin")' > <i class="fas fa-plus-square"></i> Create Admin</a></li>
							<li><a href="set_exams.php" onclick='change_pagename("Set Exam")' > <i class="fas fa-eye-dropper"></i> Set Exams</a></li>
							<li><a href="tstandings.php" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="teacher_profile.php" onclick='change_pagename("Profiles")' > <i class="fas fa-user-circle"></i> Profiles</a></li>
							<li><a href="signout.php" > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down">
					
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