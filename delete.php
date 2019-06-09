<?php
		include("includes/database.php");
	
			if(isset($_GET['delete'])){
				
				$get_id = $_GET['delete'];
				
				$delete = "DELETE FROM customers WHERE cusId = '$get_id'";
				$run_delete = mysqli_query($con,$delete);
				
				
				echo "<script>alert('Customer has been Deleted')</script>";
				echo "<script>window.open('home.php','_self')</script>";
				
			}

		
?>