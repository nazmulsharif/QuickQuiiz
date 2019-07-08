<?php
	session_start();
	include('config.php');
	
							if(isset($_POST['submit'])&&!empty($_POST['submit']))
							{
								$id=$_SESSION['username'];
								$upload_image=$_FILES["photo"]["name"];
								$folder="images/";
								if($upload_image!=""){
								move_uploaded_file($_FILES["photo"]["tmp_name"], "$folder".$_FILES["photo"]["name"]);
								
								$insert_path="UPDATE `student` SET `photo`='$upload_image' WHERE `username`='".$_SESSION['username']."'";

								$var=mysqli_query($conn,$insert_path);
								}
								else
									echo "<script>alert('Please select a photo');</script>";
							}
							
	$query1 = "SELECT * FROM `student` WHERE `username`='".$_SESSION['username']."'";
	$result1 = mysqli_query($conn, $query1);
	$rows1=mysqli_affected_rows($conn);
		
		if($rows1>0)
		{
			$a1=mysqli_fetch_array($result1, MYSQLI_ASSOC);
		}
		
	$query2 = "SELECT * FROM `student` WHERE `username`='".$_SESSION['username']."'";
	$result2 = mysqli_query($conn, $query2);
	$rows2 =mysqli_affected_rows($conn);
		
		if($rows2>0)
		{
			$a2=mysqli_fetch_array($result2, MYSQLI_ASSOC);
		}
	
		
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
							<li><a href="sdashboard.php" onclick='change_pagename("Home")' > <i class="fas fa-home"></i> Home</a></li>
							<li><a href="snotifications.php" onclick='change_pagename("Notifications")' > <i class="fas fa-bell"></i> Notifications</a></li>
							<li><a href="exams.php" onclick='change_pagename("Exams")' > <i class="fas fa-eye-dropper"></i> Exams</a></li>
							<li><a href="sstandings.php" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="student_profile.php" onclick='change_pagename("My Profile")' class="on" > <i class="fas fa-user-circle"></i> My Profile</a></li>
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
							<div class="col-md-8 col-lg-8">
								<h3><?php if(isset($a1['username']))echo $a1['username']; ?></h3>
								<h5>Name: <?php if(isset($a1['username']))echo $a1['username']; ?></h5>
								<h5>Email: <?php if(isset($a1['email']))echo $a1['email']; ?></h5>
								<h5>Mobile: <?php if(isset($a1['mobile']))echo $a1['mobile']; ?></h5>
								<h5>Institute: <?php if(isset($a1['institute']))echo $a1['institute']; ?></h5>
							</div>
							<div class="col-md-4 col-lg-4">
								<img class="photo" src="images/<?php if(isset($a1['photo']))echo $a1['photo']; ?>" alt="No image uploaded" height="180px" width="150px">
								<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" >
								<input type="file" name="photo" style="color:white;"><input type="submit" name="submit" value="upload" style="padding:1% 5%;display:block;margin:5% auto;border-radius:5px; background:#0e2849; color:white;">
								</form>
							</div>
								
						
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
		
		
		$('#current_page').html("My Profile");
		
		function change_pagename(n){
			$('#current_page').html(n);
		}
		
		
	</script>
  </body>
</html>