<?php 
    if(isset($_POST['update'])){
        $id= $_GET['id'];
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $phone = addslashes($_POST['phone']);
        $company = addslashes($_POST['company']);
        $address = addslashes($_POST['address']);

        $update = "UPDATE `customers` 
                SET cusName='$name',cusEmail='$email',cusPhone='$phone',cusCompanyName='$company',cusAddress='$address' 
                WHERE cusId='$cusId'";
        $run = mysqli_query($con,$update);
        
        if($run){
            
            echo "<script>window.open('home.php','_self')</script>";
    }
    }
?>