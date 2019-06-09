<?php 
    require_once('includes/database.php'); 
    session_start();
?>
<?php 
					if(isset($_POST['login'])){
						$email = mysqli_real_escape_string($con,$_POST['email']);
						$pass = mysqli_real_escape_string($con,$_POST['pswd']);
						
						$get_admin = "SELECT * FROM `admin` WHERE adminEmail='$email' AND adminPassword='$pass'";
						
						$run_admin = mysqli_query ($con,$get_admin);
						
						$check_admin = mysqli_num_rows($run_admin);
						
						if($check_admin == 1){
                            	
							echo "<script>window.open('home.php','_self')</script>";
						}
						else{
                            //echo "<script>alert('Password or E-mail is not Correct !')</script>";
                            $error[]="error";
						}	
					}		
			?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Managment System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font_awesome.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fontawesome.min.js"></script>
</head>
<body>

    <nav class="navbar bg-dark">
        <div class="col-lg-6">
            <h2 style="color:white;text-align:center;">Customer Managment System</h2>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div id="loginForm" class="bg-light">
            <h2 style="text-align:center;">Admin Login</h2><hr>
            <form action="index.php" method="post">
                <?php 
                    if(isset($error)){
                        echo
                        '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            Email or Password is Incorrect!
                        </div>';
                    }
                ?>
                    
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                </div>

                   <br> <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </form>
            
        </div>
    </div>
    <br>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark" id="footer">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright 
            <a href="https://www.linkedin.com/in/saajid-muhammad-b6147b13b/"> Saajid Muhammad</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    
</body>
</html>