<?php
session_start();

include "config.php";

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GoApps Desk</title>
        <link href="css/styles1.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel= 
		"stylesheet" crossorigin="anonymous" /> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
        .navbar-nav{
            margin-right: 80%;
        }
    </style>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-primary bg-dark">
            <a class="navbar-warning">GoComplaint v1.0</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>

                       

                    </div>
                </li>
            </ul>
        </nav>
        <div style="background-color:whitesmoke" id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
						 <div class="sb-sidenav-menu-heading">Home</div>
                            <a  class="nav-link" href="admin_menu.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fas fa-home"></i></div> 
                                Home Page
                            </a>
							<div class="sb-sidenav-menu-heading">Registration</div>
                            <a class="nav-link" href="register.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fab fa-wpforms"></i></i></div>
                                Create Account
                            </a>
                            <a class="nav-link" href="reset-password.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fab fa-wpforms"></i></i></div>
                                Reset Password
                            </a>
                            <div class="sb-sidenav-menu-heading">User Management</div>
                            <a class="nav-link" href="attendance.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fas fa-users"></i></i></div>
                                User Attendance
                            </a>
                            <a class="nav-link" href="upload.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fas fa-cloud"></i></i></div>
                                Upload Image
                            </a>
                            <a class="nav-link" href="uploaddoc.php">
                                <div style="color:steelblue" class="sb-nav-link-icon"><i class="fas fa-folder"></i></i></div>
                                Upload Document
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></div>
                    </div>
                </nav>
            </div>
