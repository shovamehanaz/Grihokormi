<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiring Servent</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>

    <section class="">
        <?php
			include 'header.php';
		?>

            <section class="caption">
                <h2 class="caption" style="text-align: center">Find Your Dream Servent To Hire</h2>

            </section>
    </section>
    <!--  end hero section  -->

    <section class="search">
        <div class="wrapper">
            <div id="fom">
                <!-- <form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Sigup Here</a></td>
					</tr>
				</table>
			</form> -->
                <form style="padding-bottom:30px" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="log" class="btn btn-primary">Submit</button>
                    <a class="btn pull-right" href="signup.php">Sigup Here</a>
                </form>
                <?php
				if(isset($_POST['log'])){
					include 'includes/config.php';

					$uname = $_POST['email'];
					$pass = $_POST['pass'];

					$qy = "SELECT * FROM customer WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
            </div>
            <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
        </div>

    </section>
    <!--  end search section  -->

    <footer>
        <div class="wrapper footer">
            <ul>
                <li class="links">
                    <ul>
                        <li>OUR COMPANY</li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>

                <li class="links">
                    <ul>
                        <li>OTHERS</li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>

                <li class="links">
                    <ul>
                        <li>OUR Servent TYPES</li>
                        <li><a href="#">Part Time</a></li>
                        <li><a href="#">Full time</a></li>
                    </ul>
                </li>

                <li class="about">
                    <p>Servent team is an organized company that rents Servent  to clients at lower costs. </p>
                    <ul>
                        <li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
                        <li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
                        <li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
                        <li><a href="#" class="skype"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="copyrights wrapper">
            Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by developers.
        </div>
    </footer>
    <!--  end footer  -->

</body>

</html>