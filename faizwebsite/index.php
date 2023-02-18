<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GoComplaint v1.0</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style type="text/css">
            html, body {height: 100%;}
            textarea {
            border: solid 1px green;
            width: 100%;
            height: 100%;
            -webkit-box-sizing: border-box;
            line-height: 44px;
            font-family:Helvetica;
            font-size: 17pt;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            background-image:url('linedBack@2x.png');
            outline: none;
            resize: none;
            }
            textarea.vert { resize:vertical; }
            </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container" style="margin-bottom: -10px; margin-top: -10px;">
                <a class="navbar-brand " href="#page-top">GoComplaint</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Admin Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#menu">Menu</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-success text-white text-center">
            <div class="container d-flex align-items-center flex-column">
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
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5"style="width:600px;height:300px; margin-top: -100px;" src="assets/img/goapps.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"style="margin-top: -100px;">WELCOME TO OUR HELPDESK</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-archive"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">DESIGN - FIX - UPGRADE</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="menu">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 "style="margin-top: 50px;">Menu</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-bullhorn"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/komplain.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/table.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/survey.png" alt="..." />
                        </div>
                    </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-success text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-flag"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">GoComplaint is a website to help us connect with our valuable clients. We will give our best on maintaining clients system.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">As users, you want the best for your organizations so do We. </p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://goapps.my/gopro/">
                    <i class="fa-solid fa-building-circle-check"></i>
                        GoApps
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center bg-secondary">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                        No.2-1-02, D'Vida Ofiice,
                        Jalan Bazar U8/101,
                        Bukit Jelutong,
                            <br />
                            40150 Shah Alam,
                            Selangor Darul Ehsan
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/yxka97"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/_xsidecharacter"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/company/goapps-technology-sdn-bhd/about/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Me</h4>
                        <p class="lead mb-0">
                            A young-internship student that create this helpdesk
                            <a href="https://wa.link/t8av3x">Contact Me</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; GoApps Technology Sdn Bhd (2022)</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Complaint</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fa-solid fa-floppy-disk"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="card mt-5">
                                <div class="card-header">
                                    <h4>Welcome</h4>
                                </div>
                                <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Telephone Number</label>
                                <input type="number" name="telephone" class="form-control" required/>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Work ID</label>
                                <input type="number" name="workID" class="form-control" required/>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Agency</label>
                                <select name="agency" class="form-control" required>
                                    <option value="">--Select Now--</option>
                                    <option value="ASWARA">Akademi Seni Budaya dan Warisan Kebangsaan</option>
                                    <option value="ATM">Angkatan Tentera Malaysia</option>
                                    <option value="MARA">GIATMARA Sdn. Bhd.</option>
                                    <option value="MARDI">Institut Penyelidikan dan Kemajuan Pertanian Malaysia</option>
                                    <option value="ISN">Institut Sukan Negara</option>
                                    <option value="MIROS">Institut Penyelidikan Kelamatan Jalan Raya Malaysia</option>
                                    <option value="LPPKN">Lembaga Penduduk dan Pembangunan Keluarga Negara</option>
                                    <option value="LKIM">Lembaga Kemajuan Ikan Malaysia</option>
                                    <option value="FELDA">Lembaga Kemajuan Tanah Persekutuan</option>
                                    <option value="LGM">Lembaga Getah Malaysia</option>
                                    <option value="LPP">Lembaga Pertubuhan Peladang</option>
                                    <option value="MTIB">Lembaga Perindustrian Kayu Malaysia</option>
                                    <option value="LTAT">Lembaga Tabung Angkatan Tentera</option>
                                    <option value="PTPTN">Perbadanan Tabung Pendidikan Tinggi Nasional</option>
                                    <option value="PTPK">Perbadanan Tabung Pembangunan Kemahiran</option>
                                    <option value="SMECORP">Perbadanan Industri Kecil dan Sederhana</option>
                                    <option value="KRAF">Perbadanan Kemajuan Kraftangan Malaysia</option>
                                    <option value="SSM">Suruhanjaya Syarikat Malaysia</option>
                                    <option value="SPAN">Suruhanjaya Perkhidmatan Air Negara</option>
                                    <option value="MSN">Majlis Sukan Negara</option>
                                    <option value="MBSA">Majlis Bandaraya Shah Alam</option>
                                    <option value="MBSP">Majlis Bandaraya Seberang Perai</option>
                                    <option value="TDM">Tentera Darat Malaysia</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Department</label>
                                <select name="department" class="form-control" required>
                                    <option value="">--Select Now--</option>
                                    <option value="Asset">Deparment of Asset Management</option>
                                    <option value="Store">Deparment of Store Management</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Type of Problem</label>
                                <select name="typeofproblem" class="form-control" required>
                                    <option value="">--Select Now--</option>
                                    <option value="Cannot Login into System">Cannot Login into System</option>
                                    <option value="Cannot Download PDF nor Excel">Cannot Download PDF nor Excel</option>
                                    <option value="Missing Modul">Missing Modul</option>
                                    <option value="Missing Sub-Modul">Missing Sub-Modul</option>
                                    <option value="Missing Button">Missing Button</option>
                                    <option value="Data not shown">Data not shown</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Problem Description</label>
                                <textarea rows="10" cols="80" name="comment" required></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select1" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
                <br>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">User Request</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fa-solid fa-user-secret"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by work ID">
                                    <br>
                                    <br>
                                    <?php
                                    $sql = "SELECT * FROM complaint" ;
                                    $result = $conn->query($sql);
                                    ?>
                                                           <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">On-Going/Done</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Work ID</th>
                                            <th>Agency</th>
                                            <th>Department</th>
                                            <th>Type of Problem</th>
											<th>Status</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if ($result->num_rows > 0) {
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
										 $workID = $row['workID'];
										 $agency = $row['agency'];
										 $department = $row['department'];
										 $typeofproblem = $row['typeofproblem'];
                                         $status = $row['status'];
										echo "<tr>
                                            <td>$workID</td>
											<td>$agency</td>
                                            <td>$department</td>
                                            <td>$typeofproblem</td>
                                            <td>$status</td>
                                        </tr>";
									  }
									} else {
									  echo "0 results";
									}
                                      
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Website Survey</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                </div>
                                <div class="card mt-5">
                                <div class="card-header">
                                    <h4>Welcome</h4>
                                </div>
                                <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" required/>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Position</label>
                                <select name="position" class="form-control" required>
                                    <option value="">--Select Now--</option>
                                    <option value="senior">Senior-Level Employees</option>
                                    <option value="middle">Middle-Level Employees</option>
                                    <option value="junior">Junior-Level Employees</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Rate our helpdesk</label>
                                <select name="position" class="form-control" required>
                                    <option value="">--Select Now--</option>
                                    <option value="Very Good">Very Good</option>
                                    <option value="Good">Good</option>
                                    <option value="Average">Average</option>
                                    <option value="Bad">Bad</option>
                                    <option value="Very Bad">Very Bad</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Reason(If Any)</label>
                                <textarea rows="10" cols="80" name="comment"></textarea>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select2" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
                <br>

<button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
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
    td = tr[i].getElementsByTagName("td")[0];
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
    </body>
</html>
