<?php
				session_start();
				$_SESSION['username']="";
				$_SESSION['type']="";
				echo "<script>location.href='index.php';</script>";
				session_destroy() ;
				$_SESSION = array();
				unset($_SESSION);
			?>