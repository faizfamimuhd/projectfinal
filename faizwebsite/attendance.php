<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>User Attendance</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                        <div class="container">
		<div class="from-group mb-3">
			<div class="col-lg-6">
				<div class="form-group">
					<label>User ID</label>
					<input type='text' name="userid"
						id='userid' class='form-control'
						placeholder='Enter User ID'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="from-group mb-3">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username"
						id="username" class="form-control"
						placeholder='Username'
						value="">
				</div>
			</div>
		</div>
	</div>
        <div class="dropdown">
             <div class="col-lg-6">
                <label for="">Attendance</label>
                    <select name="attendance" class="form-control">
                    	<option value="">-Select Now-</option>
                         <option value="Attend">Attend</option>
                         <option value="Absent">Absent</option>
						 <option value="Sick Leave">Sick Leave</option>
						 <option value="Work From Home">Work From Home</option>
                    </select>
                     </div>
                            <br>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script>

		// onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("username").value = "";
				
				return;
			}
			else {

				// Creates a new XMLHttpRequest object
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {

					// Defines a function to be called when
					// the readyState property changes
					if (this.readyState == 4 &&
							this.status == 200) {
						
						// Typical action to be performed
						// when the document is ready
						var myObj = JSON.parse(this.responseText);

						// Returns the response data as a
						// string and store this array in
						// a variable assign the value
						// received to first name input field
						
						document.getElementById
							("username").value = myObj[0];
						
						// Assign the value received to
						// last name input field
						
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "gfg.php?userid=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
	</script>

</body>
</html>

<?php
include 'footer.php';
?> 