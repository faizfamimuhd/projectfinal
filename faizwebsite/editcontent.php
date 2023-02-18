<?php
include 'header.php';

if (isset($_GET['workID'])){
    $workID = $_GET['workID'];
}
else {
	$workID = 0;
}

if (isset($_POST['submit'])){
    $status = $_POST['status'];
	$sql3 = "UPDATE complaint SET status='$status' WHERE workID=$workID";
	if ($conn->query($sql3) === TRUE) {
	  echo "<script>
      window.alert('Update Successful');
      </script>";
    } else {
      echo "<script>
      window.alert('Update failed');
      </script>";
    }
		
}

if(isset($_SESSION['role'])){
$sql = "SELECT * FROM complaint WHERE workID=$workID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {
    $status = $_POST['status'];
	} 
}
}
?>


<!-- Start Page -->
                    <!-- DataTales Example -->
					<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
 
 
.wrapper {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
    </style>
</head>
						
                           
							<body>
							<div class="wrapper">
        <h2>Status</h2>
        <p>Please update if clients database have been fixed.</p>
		<form action="<?php echo $_SERVER['PHP_SELF']."?workID=$workID"; ?>"  method='post'>

		<div class="form-group">
            <label class="big mb-1" for="status">Status</label>
            <select name="status" class="form-control" id="status" type="text" placeholder="Enter Status" required>
			<option value="">--Select Now--</option>
                                    <option value="On-Going">On-Going</option>
                                    <option value="Done">Done</option>
                                    <option value="Upgrading">Upgrading</option>
                                    <option value="Maintenance">Maintenance</option>
									</select>
									<input type="submit" class="btn btn-primary btn-user btn-block" value="Save" name="submit">
</form>
            </div>

							</body>
</html>
                <!-- /.container-fluid -->
 <!-- END OF PAGE -->
            
<?php
include 'footer.php';
?>

