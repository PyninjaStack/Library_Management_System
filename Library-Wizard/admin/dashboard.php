<?php
session_start();
error_reporting(0);
include ('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:index.php');
} else { ?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Library Management System | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- CUSTOM CSS -->
    <style>
      .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
        padding: 20px;
        text-align: center;
        margin-bottom: 20px;
        background-color: #f9f9f9;
      }

      .card:hover {
        background-color: #f1f1f1;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      }

      .card i {
        font-size: 3em;
        margin-bottom: 15px;
        color: #5cb85c;
      }

      .card h3 {
        font-size: 2em;
        margin-bottom: 10px;
      }

      .card a {
        text-decoration: none;
        color: inherit;
      }
    </style>
  </head>

  <body>
    <!------MENU SECTION START-->
    <?php include ('includes/header.php'); ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
          <div class="col-md-12">
            <h4 class="header-line">ADMIN DASHBOARD</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <a href="manage-books.php">
                    <i class="fa fa-book"></i>
                    <?php
                    $sql = "SELECT id from tblbooks ";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $listdbooks = $query->rowCount();
                    ?>
                    <h3><?php echo htmlentities($listdbooks); ?></h3>
                    Books Listed
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <i class="fa fa-bars"></i>
                  <?php
                  $sql1 = "SELECT id from tblissuedbookdetails ";
                  $query1 = $dbh->prepare($sql1);
                  $query1->execute();
                  $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                  $issuedbooks = $query1->rowCount();
                  ?>
                  <h3><?php echo htmlentities($issuedbooks); ?> </h3>
                  Times Book Issued
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <i class="fa fa-recycle"></i>
                  <?php
                  $status = 1;
                  $sql2 = "SELECT id from tblissuedbookdetails where RetrunStatus=:status";
                  $query2 = $dbh->prepare($sql2);
                  $query2->bindParam(':status', $status, PDO::PARAM_STR);
                  $query2->execute();
                  $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                  $returnedbooks = $query2->rowCount();
                  ?>
                  <h3><?php echo htmlentities($returnedbooks); ?></h3>
                  Times Books Returned
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <a href="reg-students.php">
                    <i class="fa fa-users"></i>
                    <?php
                    $sql3 = "SELECT id from tblstudents ";
                    $query3 = $dbh->prepare($sql3);
                    $query3->execute();
                    $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
                    $regstds = $query3->rowCount();
                    ?>
                    <h3><?php echo htmlentities($regstds); ?></h3>
                    Registered Users
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <a href="manage-authors.php">
                    <i class="fa fa-user"></i>
                    <?php
                    $sql4 = "SELECT id from tblauthors ";
                    $query4 = $dbh->prepare($sql4);
                    $query4->execute();
                    $results4 = $query4->fetchAll(PDO::FETCH_OBJ);
                    $listdathrs = $query4->rowCount();
                    ?>
                    <h3><?php echo htmlentities($listdathrs); ?></h3>
                    Authors Listed
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <a href="manage-categories.php">
                    <i class="fa fa-file-archive-o"></i>
                    <?php
                    $sql5 = "SELECT id from tblcategory ";
                    $query5 = $dbh->prepare($sql5);
                    $query5->execute();
                    $results5 = $query5->fetchAll(PDO::FETCH_OBJ);
                    $listdcats = $query5->rowCount();
                    ?>
                    <h3><?php echo htmlentities($listdcats); ?> </h3>
                    Listed Categories
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <canvas id="myLineChart" style="height: 400px; width: 100%;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include ('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

    <!-- Including Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      // Generate random data for books issued each month
      function getRandomData() {
        var data = [];
        for (var i = 0; i < 12; i++) {
          data.push(Math.floor(Math.random() * 100));
        }
        return data;
      }

      var ctx = document.getElementById("myLineChart").getContext("2d");
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
          ],
          datasets: [
            {
              label: "Books Issued",
              data: getRandomData(),
              backgroundColor: "rgba(153,205,1,0.45)",
              borderColor: "rgba(153,205,1,1)",
              fill: true,
            },
          ],
        },
        options: {
          scales: {
            x: {
              title: {
                display: true,
                text: 'Months'
              },
              grid: {
                display: false // Hides x-axis grid lines
              }
            },
            y: {
              title: {
                display: true,
                text: 'Books Issued'
              },
              grid: {
                display: false // Hides y-axis grid lines
              }
            }
          }
        }
      });
    </script>
  </body>

  </html>
<?php } ?>