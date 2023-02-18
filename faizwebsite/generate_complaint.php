<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goapps";

// Create connection
$conn = new mysqli($servername, $username, $password , $database );
session_start();

$query ="SELECT * FROM complaint";
$result = mysqli_query($conn, $query); 

if (mysqli_num_rows($result) > 0) {
    header('Content-Type: text/csv; charset=utf-8'); 
    header('Content-Disposition: attachment; filename=data.csv'); 
    $output = fopen("php://output", "w"); 
    fputcsv($output, array('id', 'name', 'telephone', 'workID', 'agency', 'department', 'typeofproblem', 'comment', 'status')); 
    while($row = mysqli_fetch_assoc($result))  {
         fputcsv($output, $row); 
    } 
    fclose($output); 
}else{
echo "No Data";
}
mysqli_close($conn); 
?>