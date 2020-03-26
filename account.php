<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="container" style="padding:40px">
		<div id="fom" class="login">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline;font-family:Didact Gothic">Client Login Area</h3>
				<div class="form-row">
    				<div class="row">
					Email Address:	<input type="email" name="email" placeholder="Enter Email Address" class="form-control" placeholder="Enter Email Address" required>
    				</div>
    			<div class="row">
				Password:<input type="password" name="pass" class="form-control" placeholder="Enter ID Number" required>
    			</div>
				<div class="row" style="margin-top:10px">
				  <input type="submit" name="log" class="btn btn-success" value="Login Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="signup.php">Sigup Here</a>
				  </div>
				  </div>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	<?php 
	include 'footer.php';	
	?><!--  end footer  -->
	
</body>
</html>