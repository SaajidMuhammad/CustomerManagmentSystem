<?php 
        require('includes/database.php'); 
?>
 <?php 
        $cusId= $_GET['id'];
        $customers = "SELECT * FROM `customers` WHERE cusId='$cusId'";
        $run_customers = mysqli_query($con,$customers);
        $row_customers = mysqli_fetch_array($run_customers);
        
        $cusName = $row_customers['cusName'];
        $cusEmail = $row_customers['cusEmail'];
        $cusNumber = $row_customers['cusNumber'];
        $cusCompanyName = $row_customers['cusCompanyName'];
        $cusAddress = $row_customers['cusAddress'];
                                
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Mangemnt System - Update</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font_awesome.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fontawesome.min.js"></script>
</head>
<body>
        <!-- Navbar -->
        <nav class="nav navbar navbar-expand-sm navbar-dark bg-dark p-0">
            <div class="container">
                <a href="home.php" class="navbar-brand"> &nbsp;&nbsp; Admin Dashboard </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                        
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="fas fa-user-times"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
        <section id="action" class="py-4 mb-4 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <center><h2 class="font-weight-bolder text-light">Edit Customer Details</h2></center>
                    </div>
                    
                </div>
            </div>
        </section>
        <div id="edit_user">
            <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required value="<?php echo  $cusName?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email" value="<?php echo  $cusEmail?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number :</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo  $cusNumber?>" required>
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name :</label>
                                <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company" value="<?php echo  $cusCompanyName?>" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?php echo  $cusAddress?>" required>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <!-- <button class="btn btn-primary" data-dismiss="modal" name="submit">Add Customer</button> -->
                        <input type="submit" value="Update Details" name="update" class="btn btn-primary">
                    </div>
                        </form>
                        <?php include("update.php"); ?>
                       
                    </div>

                    



                    <footer class="page-footer font-small bg-dark" style="margin-top:20px;">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright 
                        <a href="https://www.linkedin.com/in/saajid-muhammad-b6147b13b/"> Saajid Muhammad</a>
                    </div>
                    <!-- Copyright -->

                    </footer>           
</body>
</html>