<?php
	session_start();
	include('config.php');
	if(isset($_POST['loginform']))
	{
		
		$query = "SELECT * FROM `student` WHERE `username`='".$_POST['lusername']."' and `password`='".$_POST['lpassword']."'";
		$result=mysqli_query($conn, $query);
		$rows=mysqli_affected_rows($conn);
		
		$query1 = "SELECT * FROM `teacher` WHERE `username`='".$_POST['lusername']."' and `password`='".$_POST['lpassword']."'";
		$result1 = mysqli_query($conn, $query1);
		$rows1=mysqli_affected_rows($conn);
		
		if($rows>0)
		{
			$a=mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($a['username'])
			{
				$_SESSION['username']=$a['username'];
				$_SESSION['type']="student";
				echo 1;
			}
			else
			{
				echo 3;
			}
		}
		else if($rows1>0)
		{
			$a1=mysqli_fetch_array($result1, MYSQLI_ASSOC);
			if($a1['username'])
			{
				$_SESSION['username']=$a1['username'];
				$_SESSION['type']="teacher";
				echo 2;
			}
			else
			{
				echo 4;
			}
		}
		else
		{
			echo 5;
		}
		
	}
	
	if(isset($_POST['signupform']))
	{
		//Check if Username or Admin name already exists, because jodi age thekei ek e name admin and student thake tahle konta admin r konta 
		//student aladavabe bujha jabe na ...
		$query = "SELECT * FROM `student` WHERE `username`='".$_POST['username']."'";
		$result=mysqli_query($conn, $query);
		$rows=mysqli_affected_rows($conn);
		
		$query1 = "SELECT * FROM `teacher` WHERE `username`='".$_POST['username']."'";
		$result1 = mysqli_query($conn, $query1);
		$rows1=mysqli_affected_rows($conn);
		
		if($rows>0||$rows1>0)
		{
			echo "Sorry the username already registered. Try another username.\n\n";
		}
		else
		{
			$query = "INSERT INTO `student`(`username`, `password`,`email`,`gender`,`mobile`,`institute`, `type`) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['mobile']."','".$_POST['institute']."','student')";
			$result=mysqli_query($conn, $query);
			if($result)
			{
				echo "\tForm Submitted Succesfully\n\n";
			}
		}
		
	}
	
	/*if(isset($_POST['exam_info']))
	{
			/*if(isset($_POST['date']))
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
			$query = "INSERT INTO `exam`(`title`, `q1`, `11`, `12`, `13`, `14`, `q2`, `21`, `22`, `23`, `24`, `q3`, `31`, `32`, `33`, `34`, `q4`, `41`, `42`, `43`, `44`, `q5`, `51`, `52`, `53`, `54`, `q6`, `61`, `62`, `63`, `64`, `q7`, `71`, `72`, `73`, `74`, `q8`, `81`, `82`, `83`, `84`, `q9`, `91`, `92`, `93`, `94`, `q10`, `101`, `102`, `103`, `104`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`) 
			VALUES ('".$_POST['title']."', '".$_POST['q1']."', '".$_POST['11']."', '".$_POST['12']."', '".$_POST['13']."', '".$_POST['14']."', '".$_POST['q2']."', '".$_POST['21']."', '".$_POST['22']."', '".$_POST['23']."', '".$_POST['24']."', '".$_POST['q3']."', '".$_POST['31']."', '".$_POST['32']."', '".$_POST['33']."', '".$_POST['34']."', '".$_POST['q4']."', '".$_POST['41']."', '".$_POST['42']."', '".$_POST['43']."', '".$_POST['44']."', '".$_POST['q5']."', '".$_POST['51']."', '".$_POST['52']."', '".$_POST['53']."', '".$_POST['54']."', '".$_POST['q6']."', '".$_POST['61']."', '".$_POST['62']."', '".$_POST['63']."', '".$_POST['64']."', '".$_POST['q7']."', '".$_POST['71']."', '".$_POST['72']."', '".$_POST['73']."', '".$_POST['74']."', '".$_POST['q8']."', '".$_POST['81']."', '".$_POST['82']."', '".$_POST['83']."', '".$_POST['84']."', '".$_POST['q9']."', '".$_POST['91']."', '".$_POST['92']."', '".$_POST['93']."', '".$_POST['94']."', '".$_POST['q10']."', '".$_POST['101']."', '".$_POST['102']."', '".$_POST['103']."', '".$_POST['104']."', '".$_POST['ans1']."', '".$_POST['ans2']."', '".$_POST['ans3']."', '".$_POST['ans4']."', '".$_POST['ans5']."', '".$_POST['ans6']."', '".$_POST['ans7']."', '".$_POST['ans8']."', '".$_POST['ans9']."', '".$_POST['ans10']."')";
			$result=mysqli_query($conn, $query);
			if($result)
			{
				echo "New Exam Created.";
			}
			else
			{
				echo "Something is wrong.";
			}
		
		
	} 
	if(isset($_POST['exam_info']))
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
			$query = "INSERT INTO `exams`( `qid`, `title`, `no`, `date`, `time`, `duration`, `option_set`) 
			VALUES ('".$_POST['qid']."', '".$_POST['title']."', '".$_POST['no']."', '$date', '$time', '".$_POST['duration']."', '0')";
			$result=mysqli_query($conn, $query);
			if($result)
			{
				
				$_SESSION['qid']="qid";
				$_SESSION['no']=$_POST['no'];
				echo 111;
			}
			else
			{
				echo "Something is wrong.";
			}
		
		
	} 
	
	*/
	
?>