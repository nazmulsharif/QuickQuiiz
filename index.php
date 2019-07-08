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
    <link href="css/style.css" rel="stylesheet">
	<script>
		
</script>
  </head>
  <body>
	<img src="images/background1.jpg" style="position:absolute; width:100%; height:100%;margin:0;padding:0;opacity:0.1;" > 
	<div class="whole">
	
	<div class="container">
			<div class="content">
				
				<div class="section4">
					<h1 class="heading" style="text-align:left;font-size:2em;">Log In</h1>
				</div>
				<div class="section6">
					<h1 class="heading" style="text-align:left;font-size:2em;">Registration</h1>
				</div>
				<div class="main">
					<div class="section1">
						<h1 class="heading">Online Examination System</h1>
					</div>
					<!-- Sign in section --------->
					<div class="section3">
						<div class="container-fluid">
							<form id="loginform" method="POST" action="action.php">
								<!-- Text input-->
								<div class="row">
								  <div class="col-md-6">
								  <input type="text" name="lusername" placeholder="Username" class="lusername"> 
								  <input type="hidden" name="loginform" value="yes" > 
								  </div>
								  <div class="col-md-6">
								  <input type="password" name="lpassword" placeholder="Password" class="lpassword">
								  </div>
								</div>
							</form>
						</div>
					</div>
					<!-- Sign Up section --------->
					<div class="section7">
						<div class="container-fluid">
						<p id="msg"></p>
							<form class="signupform" onSubmit="return validateForm()" name="form">
								<fieldset>
								<!-- Text input-->
								<div class="row">
								  <div class="col-md-6">
								  <input type="text" name="username" placeholder="Username" class="username"> 
								  <input type="hidden" name="signupform" value="yes" > 
								  </div>
								  <div class="col-md-6">
								  <input type="password" name="password" placeholder="Password" class="password"> 
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="row">
								  <div class="col-md-12">
									<input type="email" name="email" placeholder="Email" class="email">
								  </div>
								</div>
								
								<!-- Text input-->
								<div class="row">
								  <div class="col-md-6">
									<select  name="gender" placeholder="Gender" class="gender" style="color:#ccc !important;">
								    <option value="null">Select Gender</option>
								    <option value="M">Male</option>
								    <option value="F">Female</option> </select>
								  </div>
								  <div class="col-md-6">
									<input type="tel" name="mobile" pattern="[0-1]{2}[5-9]{1}[0-9]{2}[0-9]{6}" placeholder="Mobile No. (Ex. 01...)" class="mobile" maxlength="11"> <span class="validity"></span>
								  </div>
								</div>

								<!-- Text input-->
								<div class="row">
								  <div class="col-md-12">
								  <input type="text" name="institute" placeholder="Educational Institution" class="institute"> 
								  </div>
								</div>
								<!-- Ekhane type admin naki student ta bole deowa hoy ni, bcz tahle je kono student admin type diye registration kore admin panel e dhukte parbe. ai jonno ai kajta na kore admin creation er kajta admin panel a e deowa hoyese.
								Abar arekta kaj kora jete pare, seita holo je admin or student type hisebe e registration koruk na keno admin accept korlei id login promote hobe  -->
							</fieldset>
							</form>
						</div>
					</div>
					<div class="section2">
						<a href="#" class="signin">SIGN IN</a>
						<a href="#" class="submit">SUBMIT</a>
						<a href="#" class="registration_submit">SUBMIT</a>
						<a href="#" class="signup">SIGN UP</a>
					</div>
				</div>
				<div class="section5">
					<h1 style="text-align:left;font-size:1em;color:white;">Create an account <a href="#" class="signup2" style="color:#FFEB3B;text-decoration: underline !important;">here</a></h1>
				</div>
				<div class="section8">
					<h1 style="text-align:left;font-size:1em;color:white;">Sign in <a href="#" class="signin2" style="color:#FFEB3B;text-decoration: underline !important;">here</a></h1>
				</div>
			</div>
	
	</div>
	
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
		$('.submit').css("width","0");
		$('.submit').css("padding","0");
		$('.submit').css("visibility","hidden");
		
		$('.registration_submit').css("width","0");
		$('.registration_submit').css("padding","0");
		$('.registration_submit').css("visibility","hidden");
		
		$('.signin').click(function(){
			$('.main').css("background","rgba(255,255,255,0)");
			$('.main').css("box-shadow","none");
			$('.main').css("position","relative");
			$('.main').css("padding","5%");
			$('.section1').css("display","none");
			$('.section3').css("display","block");
			$('.section4').css("display","block");
			$('.section5').css("display","block");
			$('.section6').css("display","none");
			$('.section7').css("display","none");
			$('.section8').css("display","none");
			
			$('.signin').css("opacity","0");
			$('.signin').css("visibility","hidden");
			$('.signup').css("visibility","hidden");
			$('.signup').css("opacity","0");
			
			$('.submit').css("width","inherit");
			$('.submit').css("padding","2% 5%");
			$('.submit').css("visibility","visible");
			$('.registration_submit').css("width","0");
			$('.registration_submit').css("padding","0");
			$('.registration_submit').css("visibility","hidden");
		
			return false;
		});
		$('.signin2').click(function(){
			$('.main').css("background","rgba(255,255,255,0)");
			$('.main').css("box-shadow","none");
			$('.main').css("position","relative");
			$('.main').css("padding","5%");
			$('.section1').css("display","none");
			$('.section2').css("display","block");
			$('.section3').css("display","block");
			$('.section4').css("display","block");
			$('.section5').css("display","block");
			$('.section6').css("display","none");
			$('.section7').css("display","none");
			$('.section8').css("display","none");
			
			$('.signin').css("opacity","0");
			$('.signin').css("visibility","hidden");
			$('.signup').css("visibility","hidden");
			$('.signup').css("opacity","0");
			
			$('.submit').css("width","inherit");
			$('.submit').css("padding","2% 5%");
			$('.submit').css("visibility","visible");
			$('.submit').css("display","inline-block");
			$('.registration_submit').css("width","0");
			$('.registration_submit').css("padding","0");
			$('.registration_submit').css("visibility","hidden");
			
			return false;
		});
		$('.signup').click(function(){
			$('.main').css("background","rgba(255,255,255,0.1)");
			$('.main').css("box-shadow","rgba(0, 0, 0, 0.29) 0px 0px 20px");
			$('.section5').css("display","none");
			$('.section7').css("transform","scale(1)");
			$('.section7').css("display","block");
			$('.submit').css("display","none");
			$('.section4').css("display","none");
			
			$('.registration_submit').css("width","inherit");
			$('.registration_submit').css("padding","2% 5%");
			$('.registration_submit').css("visibility","visible");
			$('.submit').css("width","0");
			$('.submit').css("padding","0");
			$('.submit').css("visibility","hidden");
		
			$('.signin').css("opacity","0");
			$('.signin').css("visibility","hidden");
			$('.signup').css("visibility","hidden");
			$('.signup').css("opacity","0");
			$('.section3').css("display","none");
			$('.section1').css("display","none");
			$('.section6').css("display","block");
			$('.section8').css("display","block");
			return false;
		});
		$('.signup2').click(function(){
			$('.main').css("background","rgba(255,255,255,0.1)");
			$('.main').css("box-shadow","rgba(0, 0, 0, 0.29) 0px 0px 20px");
			$('.section5').css("display","none");
			$('.section7').css("transform","scale(1)");
			$('.section7').css("display","block");
			$('.submit').css("display","none");
			
			$('.registration_submit').css("width","inherit");
			$('.registration_submit').css("padding","2% 5%");
			$('.registration_submit').css("visibility","visible");
			$('.submit').css("width","0");
			$('.submit').css("padding","0");
			$('.submit').css("visibility","hidden");
			
			$('.signin').css("opacity","0");
			$('.signin').css("visibility","hidden");
			$('.signup').css("visibility","hidden");
			$('.signup').css("opacity","0");
			$('.section4').css("display","none");
			$('.section3').css("display","none");
			$('.section1').css("display","none");
			$('.section6').css("display","block");
			$('.section8').css("display","block");
			return false;
		});
		
		$('.submit').click(function(){
			$('#loginform').submit();
		});
			$('#loginform').submit(function(e) {
					
					 
					var form = $('#loginform');
					var lusername = $('.lusername').val();
					var lpassword = $('.lpassword').val();
					
				//var url = form.attr('action');
				if(lusername!=''&&lpassword!='')
				{
					$.ajax({
						   type:"POST",
						   url:"action.php",
						   data: form.serialize(),
						   success: function(data)
						   {
							   if(data==1)
							   {
								   $('#msg').html("Login Successful");
								   location.href="sdashboard.php";
							   }
							   else if(data==2)
							   {
								   $('#msg').html("Login Successful");
								   location.href="tdashboard.php";
							   }
							   else if(data==3)
							   {
								  $('#msg').html("Student not found");
							   }
							   else if(data==4)
							   {
								  $('#msg').html("Teacher not found");
							   }
							   else if(data==5)
							   {
								   alert("Wrong Username or Password.");
							   }
							   else
							   {
								   alert("Something is wrong.");
							   }
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
				e.preventDefault();
			});
			
		
		
		
		$('.registration_submit').click(function(){
			
			$(".signupform").submit();
		});
		
		$(".signupform").submit(function(e) {
				var form = $('.signupform');
				var username = $('.username').val();
				var password = $('.password').val();
				var email = $('.email').val();
				var gender = $('.gender').val();
				var mobile = $('.mobile').val();
				var institute = $('.institute').val();
				if(username!=''&&password!=''&&email!=''&&gender!=''&&mobile!=''&&institute!='')
				{
				$.ajax({
					   type: "POST",
					   url: "action.php",
					   data: form.serialize(),
					   success: function(data)
					   {
						   alert(data);
					   },
					   error: function (data) {
						   alert(data);
					   },
					 });
				}
				else
				{
					alert("Please fill up all the fields.");
				}
				e.preventDefault(); // avoid to execute the actual submit of the form.
			});
			
	</script>
  </body>
</html>