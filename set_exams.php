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
	.exam_options textarea, input{
	
    padding: 1%;
    margin-bottom: 1%;
    border: 2px solid #bfbfbf;
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
							<li><a href="create_admin.php" onclick='change_pagename("Create Admin")' > <i class="fas fa-plus-square"></i> Create Admin</a></li>
							<li><a href="set_exams.php" onclick='change_pagename("Set Exam")' class="on"> <i class="fas fa-eye-dropper"></i> Set Exams</a></li>
							<li><a href="tstandings.php" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="teacher_profile.php" onclick='change_pagename("Profiles")' > <i class="fas fa-user-circle"></i> Profiles</a></li>
							<li><a href="signout.php"  > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<?php
					
						if($_SERVER['REQUEST_METHOD']=='POST')
						{
							
							if(isset($_POST['submit'])&&!empty($_POST['submit']))
							{
									if(isset($_POST['date']))
									{
										$date = $_POST['date'];
										if($date=="")
										{
											$date=date("Y-m-d");
										}
									}
									if(isset($_POST['time']))
									{
										$time = $_POST['time'];
										if($time=="")
										{
											$time="00:00";
										}
									}
									if($_POST['qid']!=""&&$_POST['title']!=""&&$_POST['no']!=""&&$_POST['duration']!="")
									{
										$query = "INSERT INTO `exams`( `qid`, `title`, `no`, `date`, `time`, `duration`, `option_set`) 
										VALUES ('".$_POST['qid']."', '".$_POST['title']."', '".$_POST['no']."', '$date', '$time', '".$_POST['duration']."', '0')";
										$result=mysqli_query($conn, $query);
										if($result)
										{
											
											$_SESSION['qid']=$_POST['qid'];
											$_SESSION['no']=$_POST['no'];
											
										}
										else
										{
											echo "Something is wrong.";
										}
									}
									else
									{
										echo "<script>$('#msg').html('Fill up all the fields.');</script>";
									}
								
							}

							if(isset($_POST['options_submit'])&&!empty($_POST['options_submit']))
							{
									
								for($i=1; $i<=$_SESSION['no'];$i++)
								{
									$q=$_POST['q'.$i];
									$o1=$_POST['q'.$i.'o1'];
									$o2=$_POST['q'.$i.'o2'];
									$o3=$_POST['q'.$i.'o3'];
									$o4=$_POST['q'.$i.'o4'];
									$ans=$_POST['a'.$i];
									$query = "INSERT INTO `questions`(`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES ('".$_SESSION['qid']."','$q','$o1','$o2','$o3','$o4','$ans')";
									$result=mysqli_query($conn, $query);
									
								}	
								if($result)
									{
										
										unset($_SESSION['qid']);
										unset($_SESSION['no']);
										$msg="Questions set successfully!";
										
									}
									else
									{
										echo "Something is wrong.";
									}
								
							} 
						}
						
					?>
					<div class="mainbar_down">
						<p style="color:red;" id="msg"><?php if(isset($msg)){echo $msg;}?></p>
						
						<form id="exam_info"  style="color:black;<?php if(isset($_SESSION['no'])){echo "display:none";}?>" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
							<label>Enter Exam Title</label><br>
							<input type="text" cols="100" name="title" placeholder="" class="title" style="width:80%"><br>
							<input type="hidden" name="qid" class="qid" value="<?php echo uniqid(); ?>"><br>
							<label>Number of questions</label><br>
							<input type="number" max="100" min="0" name="no" placeholder="" class="no"><br>
							<label>Exam Date</label><br>
							<input type="date" max="100" min="0" name="date" placeholder="" class="date"><br>
							<label>Exam Time</label><br>
							<input type="time" max="100" min="0" name="time" placeholder="" class="time"><br>
							<label>Duration (minits)</label><br>
							<input type="number" name="duration" min="0" placeholder="" class="duration"> <br>
							<input type="submit" name="submit" value="Submit" class="submit" style="padding:1% 5%; border:1px solid orange;"> 
							<input type="hidden" name="exam_info" value="yes"> 
						</form>
						
						<div id="option">
							<?php
								if(isset($_SESSION['no']))
								{	
							
										
									echo "<form action='".htmlspecialchars($_SERVER['PHP_SELF'])."' method='POST' class='exam_options'>";
									echo "<input type='hidden' name='again_qid' class='again_qid' vlaue='".$_SESSION['qid']."'>";
									
									for($i=1; $i<=$_SESSION['no'];$i++)
									{
										echo "
											
												<textarea type='text' rows='3' name='q".$i."' placeholder='Enter Question ".$i."' style='min-width:81%;display:block;' required></textarea>
												<input type='text' name='q".$i."o1' placeholder='Option 1' style='min-width:40%;' required>
												<input type='text' name='q".$i."o2' placeholder='Option 2' style='min-width:40%;' required>
												<input type='text' name='q".$i."o3' placeholder='Option 3' style='min-width:40%;' required>
												<input type='text' name='q".$i."o4' placeholder='Option 4' style='min-width:40%;' required><br>
												<input type='number' max='4' min='1' name='a".$i."' placeholder='Enter Correct Ans.' style='min-width:81%;display:block;' required>
												
												<hr style='display:block;background:red;margin:5% 0;border:0.5px solid orange;width:80%;border-radius:50px;'>
												
										";
										
									}
									echo "<input type='submit' name='options_submit' class='submit' value='submit'>";
									echo "</form>";
								}
							?>
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
		
		$('#current_page').html("Set Exams");
		
		function change_pagename(n){
			$('#current_page').html(n);
		}
		
		
		
		/*$('.submit').click(function(){
			$('#exam_info').submit();
		});
			$('#exam_info').submit(function(e) {
					
					e.preventDefault();
					 
					var form = $('#exam_info');
					var title = $('.title').val();
					var qid = $('.qid').val();
					var no = $('.no').val();
					var date = $('.date').val();
					var time = $('.time').val();
					var duration = $('.duration').val();
					
				if(title!=''&&no!=''&&duration!='')
				{
					$.ajax({
						   type:"POST",
						   url:"action.php",
						   data: form.serialize(),
						   success: function(data)
						   {
								if(data==111){
									alert(data);
									$("#exam_info").hide();
									
								}
								else
									$("#msg").html(data);
								
						   },
						   error: function (data) {
							   alert(data);
						   }
						 });
				}
				else
				{
					alert('Please fill up all the fields.');
				}
				
			});*/
			
	</script>
  </body>
</html>