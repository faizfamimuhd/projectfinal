<?php
include 'config.php';
if(isset($_GET['workID'])){
    $workID=$_GET['workID'];
    
    $sql="delete from complaint WHERE workID=$workID";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Record Deleted";
       header('location:admin_menu.php');
    }else{
        die(mysqli_error($conn));
    }
    }
    ?>