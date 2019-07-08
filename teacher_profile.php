<?php
	session_start();
	include('config.php');

		
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
	<style>
		[class="photo"]{
			
			margin:1% 1% 5% 1%;border:1px solid #808080;padding:5%;box-shadow:2px 2px 5px #aaa;background:orange;
		}
		h3{
			border-bottom:2px solid #eee;
			padding-bottom:2%;
			margin-bottom:4%;
		}
	</style>
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
							<li><a href="tdashboard.php" onclick='change_pagename("Home")' > <i class="fas fa-home"></i> Home</a></li>
							<li><a href="tnotifications.php" onclick='change_pagename("Notifications")' > <i class="fas fa-bell"></i> Notifications</a></li>
							<li><a href="set_exams.php" onclick='change_pagename("Exams")' > <i class="fas fa-eye-dropper"></i> Exams</a></li>
							<li><a href="tstandings.php" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="teacher_profile.php" onclick='change_pagename("Profiles")' class="on" > <i class="fas fa-user-circle"></i> Profiles</a></li>
							<li><a href="signout.php" > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down">
						<div class="row">
						<table border="1" style="border:1px solid #aaa;width:100%;">
						<tr bgcolor="#eee">
							<td>Name</td>
							<td>Email</td>
							<td>gender</td>
							<td>Mobile</td>
							<td>Institute</td>
						</tr>
							<?php					
								$query1 = "SELECT * FROM `student`";
								$result1 = mysqli_query($conn, $query1);
								$rows1=mysqli_affected_rows($conn);
									
									if($rows1>0)
									{
										while($a1=mysqli_fetch_array($result1, MYSQLI_ASSOC))
										{
											echo"<tr>
												<td>".$a1['username']."</td>
												<td>".$a1['email']."</td>
												<td>".$a1['gender']."</td>
												<td>".$a1['mobile']."</td>
												<td>".$a1['institute']."</td>
											</tr>";
										}
									}
							?>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
    <script>
		
		
		$('#current_page').html("Profiles");
		
		function change_pagename(n){
			$('#current_page').html(n);
		}
		
		
	</script>
  </body>
</html>
