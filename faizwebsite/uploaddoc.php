<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload and Download File</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>

<?php
$con = mysqli_connect("localhost","root","","goapps");
if (mysqli_connect_errno()) {
echo "Unable to connect to MySQL! ". mysqli_connect_error();
}
if (isset($_POST['save'])) {
$target_dir = "Uploaded_Files/";
$target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
$files = date("dmYhis") . basename($_FILES["file"]["name"]);
}else{
echo "Error Uploading File";
exit;
}
}else{
echo "File Not Supported";
exit;
}
$filename = $_POST['filename'];
$location = "Uploaded_Files/" . $files;
$sqli = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
$result = mysqli_query($con,$sqli);
if ($result) {
echo "File has been uploaded";
};
}
?>

<div id="layoutSidenav_content">
                <main>
        <div class="container-fluid">
        <h1 class="mt-4">Upload Document</h1>
        </div>

<div class="card-header py-3">
<form class="form" method="post" action="" enctype="multipart/form-data">
<label>Filename:</label>
<input type="text" name="filename" > <br/>
<div>
<label>File:</label>
<input type="file" name="file"> <br/>
</div>
<button type="submit" name="save" class="btn btn-success"><i class="fa fa-upload fw-fa"></i> Upload</button>
</form>
</div>
<br>
<div class="card-body">
<table id="demo" class="table table-bordered">
<thead>
<tr>
<td><b>File Name</b></td>
<td><b>Download</b></td>
</tr>
</thead>
<tbody>
<?php
$sqli = "SELECT * FROM `tblfiles`";
$res = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($res)) {
echo '<tr>';
echo '<td>'.$row['FileName'].'</td>';
echo '<td><a class="btn btn-success" href="'.$row['Location'].'">Download</a></td>';
echo '</tr>';
}
mysqli_close($con);
?>
</tbody>
</table>
</div>
</body>
                </main>
</html>

<?php
include 'footer.php';
?>