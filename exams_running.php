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
							<li><a href="sdashboard.php" onclick='change_pagename("Home")' > <i class="fas fa-home"></i> Home</a></li>
							<li><a href="snotifications.php" onclick='change_pagename("Notifications")' > <i class="fas fa-bell"></i> Notifications</a></li>
							<li><a href="exams.php" onclick='change_pagename("Exams")' class="on"> <i class="fas fa-eye-dropper"></i> Exams</a></li>
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
					<div class="mainbar_down" style="color:#808080;">
						<table border="1" style="width:100%;">
						
						<?php
						
						if($_SERVER['REQUEST_METHOD']=='POST')
						{
							if(isset($_POST['finish'])&&!empty($_POST['finish']))
							{
								$qid=$_POST['qid'];
								$no=$_POST['no'];
								$title=$_POST['title'];
								$correct=0;
								
									
									
									$query = "SELECT * FROM `questions` WHERE `qid`='$qid'";
									$result=mysqli_query($conn, $query);
									$rows=mysqli_affected_rows($conn);
										if($rows>0)
										{
											$i=1;
											while($a=mysqli_fetch_array($result, MYSQLI_ASSOC))
											{
												if($a['ans']==$_POST['option'.$i])
												{
													$correct=$correct+1;
												}
												$i=$i+1;
											}
										}
									
									$query1 = "INSERT INTO `results`(`qid`, `title`, `username`,`no`, `result`) VALUES ('$qid','$title','".$_SESSION['username']."','$no','$correct')";
									$result1=mysqli_query($conn, $query1);
								
							}
							if(isset($_POST['ex_submit'])&&!empty($_POST['ex_submit']))
							{
								$qid=$_POST['qid'];
								$no=$_POST['no'];
								$title=$_POST['title'];
								
							$query = "SELECT * FROM `questions` WHERE `qid`='$qid'";
							$result=mysqli_query($conn, $query);
							$rows=mysqli_affected_rows($conn);
								if($rows>0)
								{
									echo "<form action='exams_running.php' method='post'>";
									$n=1;
									while($a=mysqli_fetch_array($result, MYSQLI_ASSOC))
									{
										echo "<tr>
													<h4>".$n.". ".$a['question']."</h4>
													<input type='hidden' name='qid' value='".$qid."'>
													<input type='hidden' name='no' value='".$no."'>
													<input type='hidden' name='title' value='".$title."'>
													<input type='radio' name='option".$n."' value='1'> ".$a['option1']."<br>
													<input type='radio' name='option".$n."' value='2'> ".$a['option2']."<br>
													<input type='radio' name='option".$n."' value='3'> ".$a['option3']."<br>
													<input type='radio' name='option".$n."' value='4'> ".$a['option4']."<br>
											  </tr>";
										$n=$n+1;
									}
									echo "<input type='submit' name='finish' value='Submit'>";
									echo "</form>";
								}
							}
							else
							{
								echo "<h4 style='color:red;'> Go to your profile to see your results. </h4>";
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
    <script>
		
		
		$('#current_page').html("Exams");
		
		function change_pagename(n){
			$('#current_page').html(n);
		}
		
		
	</script>
  </body>
</html>