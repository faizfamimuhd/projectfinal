<?php
include 'header.php';

                                    $sql = "SELECT * FROM complaint" ;
                                    $result = $conn->query($sql);
                                    ?>  
<div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid">
                        <h1 class="mt-4">User Complaint</h1>
                        </div>
                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ongoing/Done</h6>
                        <br>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Status">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Work ID</th>
                                            <th>Agency</th>
                                            <th>Type of Problem</th>
                                            <th>Comment</th>
											                      <th>Status</th>
                                            <th>Submit</th>
                                        </tr>
                                    </thead>
                                    <div class="card-header py-3">
							<a class="btn btn-success" href="generate_complaint.php" align="right">Generate Excel</a>
                        </div>
                                    <tbody>
                                    <?php
      $sql="Select * from complaint";
      $result=mysqli_query($conn,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $workID=$row['workID'];
              $agency=$row['agency'];
              $typeofproblem=$row['typeofproblem'];
              $comment=$row['comment'];
              $status=$row['status'];
              echo ' <tr>
      <th scope="row">'. $workID.'</th>
      <td>'.$agency.'</td>
      <td>'.$typeofproblem.'</td>
      <td>'.$comment.'</td>
      <td>'.$status.'</td>
      <td>
        <button class="btn btn-primary"><a href="editcontent.php? workID='.$workID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deletecontent.php? workID='.$workID.'" class="text-light">Delete</a></button>
    </td>
    </tr>';
          }
      }
     ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                </main>
                <script>

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<?php
include 'footer.php';
?>       
