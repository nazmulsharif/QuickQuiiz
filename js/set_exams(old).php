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
							<li><a href="tdashboard.php" onclick='change_pagename("Home")' > <i class="fas fa-home"></i> Home</a></li>
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
							Exam Title:
							<input type="text"  required name="title" style="width:80%" required placeholder="Title">
							<input type="text"  required name="q1" style="width:80%" required placeholder="question">
							<input type="text"  required name="11">
							<input type="text"  required name="12">
							<input type="text"  required name="13">
							<input type="text"  required name="14">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans1" >
							<input type="text"  required name="q2" style="width:80%" required  placeholder="question">
							<input type="text"  required name="21">
							<input type="text"  required name="22">
							<input type="text"  required name="23">
							<input type="text"  required name="24">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans2">
							<input type="text"  required name="q3" style="width:80%" required  placeholder="question">
							<input type="text"  required name="31">
							<input type="text"  required name="32">
							<input type="text"  required name="33">
							<input type="text"  required name="34">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans3">
							<input type="text"  required name="q4" style="width:80%" required  placeholder="question">
							<input type="text"  required name="41">
							<input type="text"  required name="42">
							<input type="text"  required name="43">
							<input type="text"  required name="44">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans4">
							<input type="text"  required name="q5" style="width:80%" required  placeholder="question">
							<input type="text"  required name="51">
							<input type="text"  required name="52">
							<input type="text"  required name="53">
							<input type="text"  required name="54">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans5">
							<input type="text"  required name="q6" style="width:80%" required  placeholder="question">
							<input type="text"  required name="61">
							<input type="text"  required name="62">
							<input type="text"  required name="63">
							<input type="text"  required name="64">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans6">
							<input type="text"  required name="q7" style="width:80%" required  placeholder="question">
							<input type="text"  required name="71">
							<input type="text"  required name="72">
							<input type="text"  required name="73">
							<input type="text"  required name="74">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans7">
							<input type="text"  required name="q8" style="width:80%" required  placeholder="question">
							<input type="text"  required name="81">
							<input type="text"  required name="82">
							<input type="text"  required name="83">
							<input type="text"  required name="84">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans8">
							<input type="text"  required name="q9" style="width:80%" required  placeholder="question">
							<input type="text"  required name="91">
							<input type="text"  required name="92">
							<input type="text"  required name="93">
							<input type="text"  required name="94">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans9">
							<input type="text"  required name="q10" style="width:80%" required  placeholder="question">
							<input type="text"  required name="101">
							<input type="text"  required name="102">
							<input type="text"  required name="103">
							<input type="text"  required name="104">
							<br><label>Answer</label><input type="number" min="1" max="4" required name="ans10">
							
							<input type="submit" name="submit" value="Submit" class="submit" style="padding:1% 5%; border:1px solid orange;"> 
							<input type="hidden" name="exam_info" value="yes"> 
						</form>
						
						<div id="option">
							<?php
								
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
					
				
					$.ajax({
						   type:"POST",
						   url:"action.php",
						   data: form.serialize(),
						   success: function(data)
						   {
								
								$("#msg").html(data);
								$("#exam_info").hide();
								
						   },
						   error: function (data) {
							   alert(data);
						   }
						 });
				
			});
			
	</script>
  </body>
</html>