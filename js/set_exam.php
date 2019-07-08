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
							<li><a href="#" onclick='change_pagename("Home")' > <i class="fas fa-home"></i> Home</a></li>
							<li><a href="#" onclick='change_pagename("Create Admin")' > <i class="fas fa-plus-square"></i> Create Admin</a></li>
							<li><a href="#" onclick='change_pagename("Set Exam")' class="on"> <i class="fas fa-eye-dropper"></i> Set Exams</a></li>
							<li><a href="#" onclick='change_pagename("Standings")' > <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="#" onclick='change_pagename("My Profile")' > <i class="fas fa-user-circle"></i> My Profile</a></li>
							<li><a href="#" onclick='logout()' > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
				<div class="mainbar">
					<div class="mainbar_up">
						<p id="current_page"></p>
					</div>
					<div class="mainbar_down">
						<p style="color:red;" id="msg"></p>
						
						<form id="exam_info" style="color:black;">
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
									echo "<form action='set_exams.php' method='POST'>";
									for($i=1; $i<$_SESSION['no'];$i++)
									{
										echo "
											
												<input type='text' name=''>
											
										";
									}
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
		
		function logout(){
			<?php
				$_SESSION['username']="";
				$_SESSION['type']="";
			?>
			location.href="index.php";
		}
		
		/*$('.submit').click(function(){
			$('#exam_info').submit();
		});*/
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
				
			});
			
	</script>
  </body>
</html>