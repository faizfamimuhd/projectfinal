<?php
include 'header.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cfmpassword = $_POST['cfmpassword'];
	
	if(strcmp($password,$cfmpassword)){
		echo "<script>
		window.alert('Password does not match!');
		</script>";
	}
	else {
		$password=password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (username, password)
				VALUES ('$username', '$password')";
				
		if ($conn->query($sql) === TRUE) {
		  echo "<script>
		window.alert('New User registered successfully');
		</script>";
		} else {
		  echo "<script>
      window.alert('Process');
      </script>";
		}
	}
}
?>
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
        <h2>Create Account for Admin</h2>
        <p>Please fill out this form to create account for another user.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
            <label class="small mb-1" for="inputUsername">Username</label>
            <input name="username" class="form-control py-4" id="inputUsername" type="text" placeholder="Enter Username" />
            </div>
            
            <div class="form-group">
            <label class="small mb-1" for="inputPassword">Password</label>
            <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
            </div>
            
            <div class="form-group">
            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
            <input name="cfmpassword" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
            </div>
            
            <div class="form-group mt-4 mb-0">
			<input class="btn btn-success btn-block" type="submit" name="submit" value="Register New Account">
			</div>
      <a class="btn btn-link ml-2" href="admin_menu.php">Cancel</a>
        </form>
    </div>    
</body>
</html>
<?php
include 'footer.php';
?>  