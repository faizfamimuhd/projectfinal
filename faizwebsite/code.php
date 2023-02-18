<?php
session_start();
$conn = mysqli_connect("localhost","root","","goapps");

if(isset($_POST['save_select']))
{
    $username = $_POST['username'];
    $attendance = $_POST['attendance'];

    $query = "INSERT INTO attendance (username,attendance) VALUES ('$username','$attendance')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: attendance.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: attendance.php");
    }
}


if(isset($_POST['save_select1']))
{
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $workID = $_POST['workID'];
    $agency = $_POST['agency'];
    $department = $_POST['department'];
    $typeofproblem = $_POST['typeofproblem'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO complaint (name,telephone,workID,agency,department,typeofproblem,comment) VALUES ('$name','$telephone','$workID','$agency','$department','$typeofproblem','$comment')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: index.php");
    }
}

if(isset($_POST['save_select2']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO survey (name,email,comment) VALUES ('$name','$email','$comment')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: index.php");
    }
}

?>