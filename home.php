<?php 
    require_once('includes/database.php'); 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Mangemnt System - Admin Panel</title>
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
            <a href="" class="navbar-brand"> &nbsp;&nbsp; Admin Dashboard </a>
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

    <!-- Actions -->
    <section id="action" class="py-4 mb-4 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <center><h2 class="font-weight-bolder text-light">List of our Customers</h2></center>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-dark btn-block" data-toggle="modal" data-target="#addUserModal">
                        <i class="fas fa-plus"></i> Add Customer
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Models -->
    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add New Customer</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="home.php" method="post">
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number :</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name :</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-primary" data-dismiss="modal" name="submit">Add Customer</button> -->
                    <input type="submit" value="Add Customer" name="submit" class="btn btn-primary">
                </div>
                    </form>
                            <!-- Adding details to Databse -->
                            <?php 
                                
                                    if(isset($_POST['submit'])){
                                        $name = addslashes($_POST['name']);
                                        $email = addslashes($_POST['email']);
                                        $phone = addslashes($_POST['phone']);
                                        $company = addslashes($_POST['company']);
                                        $address = addslashes($_POST['address']);
                                
                                    
                                        $insert = "INSERT INTO customers(cusName,cusEmail,cusNumber,cusCompanyName,cusAddress,cusDeleted) 
                                        VALUES('$name','$email','$phone','$company','$address','0')";
                                        
                                        $run = mysqli_query($con,$insert);
                                        
                                        if($run){
                                            
                                            echo "<script>window.open('home.php','_self')</script>";
                                            
                                        }
                                    }
                                
                            ?>
            </div>
        </div>
    </div>
            <!-- getting Customer details from DB -->
            

            <!-- Customer table List -->
        <div class="container">     
            <div id="customerDetails">
                <table class="table table-secondary table-hover table-responsive-md table-striped ">          
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tel No</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th colspan="2"></th>
                        </tr>   
                        <?php 
                            $customers = "SELECT * FROM `customers` WHERE cusDeleted='0'";
                            $run_customers = mysqli_query($con,$customers);
                            $i=0;
                        
                        while($row_customers = mysqli_fetch_array($run_customers)){
                            
                            $cusId = $row_customers['cusId'];
                            $cusName = $row_customers['cusName'];
                            $cusEmail = $row_customers['cusEmail'];
                            $cusNumber = $row_customers['cusNumber'];
                            $cusCompanyName = $row_customers['cusCompanyName'];
                            $cusAddress = $row_customers['cusAddress'];
                            $i++;
                    
                            
                        ?>
                        <tr>
                            <td><?php echo "$i"; ?></td>
                            <td><?php echo $cusName; ?></td>
                            <td><?php echo $cusEmail; ?></td>
                            <td><?php echo $cusNumber; ?></td>
                            <td><?php echo $cusCompanyName; ?></td>
                            <td><?php echo $cusAddress; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $cusId; ?>" class="btn btn-sm btn-primary btn-block">Edit</a>
                            </td>
                            <td><button class="btn btn-sm btn-danger btn-block" data-target='#confirm_modal1' data-toggle='modal'>Delete</button></td>
                        </tr>      
                        <?php } ?>
                </table>  
            </div>          
        </div>
        <div class="modal" id="confirm_modal1">
			<div class="modal-dialog">
				<div class="modal-content" ng-app="myApp" ng-controller="FormController">
					<div class="modal-header">
						
						  <strong>Confirm Delete</strong>
						
					</div>
					<div class="modal-body">
					 Are you Sure You want delete this Customer? <br><br><br>
						<a href="delete.php?delete=<?php echo $cusId;?>"> <button style="float:right; margin-left:10px; width:120px;" class="btn btn-danger">Delete</button></a>
						<button style="float:right; width:120px;" class="btn btn-light" data-dismiss="modal">Cancel</button> 
					</div>	
				</div>
			</div>
			</div>
    
        <footer class="page-footer font-small bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright 
            <a href="https://www.linkedin.com/in/saajid-muhammad-b6147b13b/"> Saajid Muhammad</a>
        </div>
        <!-- Copyright -->

        </footer>


</body>
</html>