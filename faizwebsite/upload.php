<?php
include 'header.php';

error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "goapps");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) { 
        echo "<script>
		window.alert('Images Upload Successfully!'); 
		</script>";
    } else {
        echo "<script>
		window.alert(' Failed to upload image!'); 
		</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<style>
 
h1 {
  font-size: large;
}
 .wrapper {
   margin: auto;
   width: 50%;
   border: 3px solid green;
   padding: 10px;
 }
 
     </style>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>

    <div class="wrapper" id="content">
    <h1>Upload Image</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
</body>
 
</html>
<?php
include 'footer.php';
?>