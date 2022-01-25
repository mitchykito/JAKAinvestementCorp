<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Transmittal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Style.css">


  <style>
    body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
    }

    .table-responsive {
      margin: 30px 0;
    }

    .table-wrapper {
      background: #fff;
      padding: 20px 25px;
      border-radius: 3px;
      min-width: 1000px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
      padding-bottom: 15px;
      background: linear-gradient(-45deg, #23a6d5, #23d5ab);
      color: #fff;
      padding: 16px 30px;
      min-width: 100%;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
    }

    .table-title .btn-group {
      float: right;
    }

    .table-title .btn {
      color: #fff;
      float: right;
      font-size: 13px;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
    }

    .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
    }

    .table-title .btn span {
      float: left;
      margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
      border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
    }

    table.table tr th:first-child {
      width: 60px;
    }

    table.table tr th:last-child {
      width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
    }

    table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
      margin: 0 5px;
    }

    table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
      outline: none !important;
    }

    table.table td a:hover {
      color: #2196F3;
    }

    table.table td a.edit {
      color: #FFC107;
    }

    table.table td a.delete {
      color: #F44336;
    }

    table.table td i {
      font-size: 19px;
    }

    table.table .avatar {
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
    }

    .pagination {
      float: right;
      margin: 0 0 5px;
    }

    .pagination li a {
      border: none;
      font-size: 13px;
      min-width: 30px;
      min-height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 2px !important;
      text-align: center;
      padding: 0 6px;
    }

    .pagination li a:hover {
      color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
      background: #03A9F4;
    }

    .pagination li.active a:hover {
      background: #0397d6;
    }

    .pagination li.disabled i {
      color: #ccc;
    }

    .pagination li i {
      font-size: 16px;
      padding-top: 6px
    }

    .hint-text {
      float: left;
      margin-top: 10px;
      font-size: 13px;
    }

    /* Custom checkbox */
    .custom-checkbox {
      position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
      opacity: 0;
      position: absolute;
      margin: 5px 0 0 3px;
      z-index: 9;
    }

    .custom-checkbox label:before {
      width: 18px;
      height: 18px;
    }

    .custom-checkbox label:before {
      content: '';
      margin-right: 10px;
      display: inline-block;
      vertical-align: text-top;
      background: white;
      border: 1px solid #bbb;
      border-radius: 2px;
      box-sizing: border-box;
      z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      content: '';
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 11px;
      border: solid #000;
      border-width: 0 3px 3px 0;
      transform: inherit;
      z-index: 3;
      transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
      border-color: #03A9F4;
      background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
      color: #b8b8b8;
      cursor: auto;
      box-shadow: none;
      background: #ddd;
    }

    /* Modal styles */
    .modal .modal-dialog {
      max-width: 400px;
    }

    .modal .transmittal {
      max-width: 90%;
      margin: 0 auto;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
      padding: 20px 30px;
    }

    .modal .modal-content {
      border-radius: 3px;
      font-size: 14px;
    }

    .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
      display: inline-block;
    }

    .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
    }

    .modal textarea.form-control {
      resize: vertical;
    }

    .modal .btn {
      border-radius: 2px;
      min-width: 100px;
    }

    .modal form label {
      font-weight: normal;
    }
  </style>

  <script>
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>


</head>



<!-- SIDE BAR  -->

<body>

  <input type="checkbox" id="sidebar-toggle">
  <div class="sidebar">
    <div class="sidebar-header">
      <h3 class="brand">
        <span class=""></span>
        <span>Jaka</span>
      </h3>
      <label for="sidebar-toggle" class="ti-menu-alt"></label>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="Inventory.php">
            <span class="ti-list"></span>
            <span>Inventory</span>
          </a>
        </li>
        <li>
          <a href="">
            <span class="ti-file"></span>
            <span>Asset Issuance</span>
          </a>
        </li>
        <li>
          <a href="transmittal.php">
            <span class="ti-folder"></span>
            <span>Transmittal Form</span>
          </a>
        </li>
        <li>
          <a href="users.php">
            <span class="ti-user"></span>
            <span>User Management</span>
          </a>
        </li>
        <li>
          <a href="signout.php">
            <span class="ti-settings"></span>
            <span>Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>



  <!-- MAIN CONTENT -->


  <div class="main-content">

    <header>
      <div class="search-wrapper">
        <span class="ti-search"></span>
        <input type="search" placeholder="Search">
      </div>

      <div class="social-icons">
        <div></div>
      </div>
    </header>

    <main>
      <div class="container-xl">
        <div class="table-responsive">
          <div class="table-wrapper">
            <div class="table-title">
              <div class="row">
                <div class="col-sm-6">
                  <h2>MIS-Asset Transmittal <b>Form</b></h2>
                </div>
                <div class="col-sm-6">
                  <a href="#transmittalForm" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add</span></a>
                </div>
              </div>
            </div>

            <table class="table table-striped table-hover">

              <thead>
                <tr>
                  <th>Asset Transmittal ID</th>
                  <th style="width: 35%">Name</th>
                  <th>Department</th>
                  <th>Phone</th>
                  <th>Ticket No.</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "jaka";
                $conn = mysqli_connect($host, $user, $pass, $db);
                $results_per_page = 5;
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }

                if (!isset($_GET['page'])) {
                  $page = 1;
                } else {
                  $page = $_GET['page'];
                }

                $this_page_first_result = ($page - 1) * $results_per_page;

                $sql = "SELECT * FROM asset_transmittal ORDER BY name ASC LIMIT " . $this_page_first_result . ',' . $results_per_page;
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $userid = $row["asset_transmittal_id"];
                    $username = $row["name"];
                    $ticket = $row["ticket"];
                    $name = $row["name"];
                    $department = $row["company"];
                    $phone = $row["phone"];

                    echo "<tr>";
                    echo "<td>$userid</td>";
                    echo "<td>$name</td>";
                    echo "<td>$department</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$ticket</td>";
                    // kaya viewTransmittal.php?id=$userid&ticket=$ticket ay para mafetch ko sa ibang file yung id at ticket number sa URL
                    echo '<td>
                    <a href="viewTransmittal.php?id=' . $userid . '&ticket=' . $ticket . '" class="add"><i class="fa" data-toggle="tooltip" title="View">&#xf06e;</i></a>
                    <a href="transmittal_final.php?id=' . $userid . '" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteModal_' . $userid . '" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>';
                    echo "</tr>";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- 
        <div class="container-xl">
          <div class="table-responsive">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h2>Create <b>Transmittal</b></h2>
                  </div>
                  <div class="col-sm-6">
                    <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add</span></a>
                    <a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                  </div>
                </div>
              </div>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                      </span>
                    </th>
                    <th>Description</th>
                    <th>Asset | S/N #</th>
                    <th>QTY</th>
                    <th>Comment</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>
                      <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>
                      <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>
                      <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>
                      <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                      </span>
                    </td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>xxxxxxxxx</td>
                    <td>
                      <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="#deleteModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div> -->
        <!-- transmittal form modal -->
        <div id="transmittalForm" class="modal fade">
          <div class="modal-dialog transmittal">
            <div class="modal-content">
              <form id="send" action="transmittal.php" method="post">
                <div class="table-responsive">
                  <div class="table-wrapper">
                    <div class="table-title">
                      <div class="row">
                        <div class="col-sm-6">
                          <h2>MIS-Asset Transmittal <b>Form</b></h2>
                        </div>
                      </div>
                    </div>

                    <table class="table table-striped table-hover">

                      <tr>
                        <th>Name:</th>
                        <td>
                          <input type="text" name="name" class="form-control" required>
                        </td>
                        <th>Check out Date:</th>
                        <td><input type="text" name="checkout" class="form-control" value="<?php echo date('m/d/y'); ?>" readonly /></td>
                      </tr>
                      <tr>
                        <th>Company-Deptartment:</th>
                        <td>
                          <input type="text" name="company" class="form-control" value="JAKA Investment Corporation" readonly required>
                        </td>
                        <th>Deployed Date:</th>
                        <td><input type="date" name="deployed" class="form-control" /></td>
                      </tr>
                      <tr>
                        <th>Employee #:</th>
                        <td>
                          <input type="text" class="form-control" id="emp_no" name="emp_no" class="emp_no" required>
                        </td>
                        <th>From:</th>
                        <td>
                          <input type="text" id="fr" name="fr" class="form-control" required>
                        </td>
                      </tr>
                      <th>Phone #:</th>
                      <td>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                      </td>
                      <th>To:</th>
                      <td>
                        <input type="text" id="to" name="to" class="form-control" required>
                      </td>
                      <tr>
                        <th>Email:</th>
                        <td><input type="text" id="email" name="email" class="form-control" required></td>
                        <th>Ticket #:</th>
                        <td><input type="text" class="form-control" name="ticket" value="2021<?php echo rand(100000, 999999) ?>" readonly></td>
                      </tr>
                    </table>
                  </div>
                </div>


                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-success" name="add" value="Add">
                </div>
              </form>
            </div>
          </div>
          <?php
          if (isset($_POST['add'])) {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "jaka";
            $conn = mysqli_connect($host, $user, $pass, $db);
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            } else {
              $name = $_POST["name"];
              $company = $_POST["company"];
              $emp_no = $_POST["emp_no"];
              $phone = $_POST["phone"];
              $email = $_POST["email"];
              $checkout = $_POST["checkout"];
              $deployed = $_POST["deployed"];
              $from = $_POST["fr"];
              $to = $_POST["to"];
              $ticket = $_POST["ticket"];
              $sql = "INSERT INTO asset_transmittal (name, company, emp_no, phone, email, checkout, deployed, fr, recipient, ticket)
			VALUES ('$name', '$company', '$emp_no', '$phone','$email','$checkout','$deployed','$from','$to','$ticket')";
              if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>
				alert('Added Sucessfully');
				window.location = 'transmittal.php';
				</script>";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }
          }
          ?>
        </div>

        <!-- Edit Modal HTML -->
        <!-- <div id="editModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Edit Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Asset | S/N #</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>QTY</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Comment</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-info" value="Save">
                </div>
              </form>


            </div>
          </div>
        </div> -->

        <!-- Delete Modal HTML -->
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "jaka";
        $conn = mysqli_connect($host, $user, $pass, $db);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $sql_1 = "SELECT * from asset_transmittal";
        $result_1 = $conn->query($sql_1);
        if ($result_1->num_rows > 0) {
          while ($row_1 = $result_1->fetch_assoc()) {
            $id = $row_1["asset_transmittal_id"];
            echo '<div id="deleteModal_' . $id . '" class="modal fade">
						 <div class="modal-dialog">
							<div class="modal-content">
							  <form action="deleteAssetTransmittal.php" method="post">
							  <input type="hidden" name="id" value="' . $id . '">
								<div class="modal-header">
								  <h4 class="modal-title">Delete</h4>
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">          
								  <p>Are you sure you want to delete these Records?</p>
								  <p class="text-warning"><small>This action cannot be undone.</small></p>
								</div>
								<div class="modal-footer">
								  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								  <input type="submit" class="btn btn-danger" name="delete" value="Delete">
								</div>
							  </form>
						</div></div></div>';
          }
        }
        $conn->close();
        ?>
</body>

</html>


</main>

</div>

</body>

</html>

<script>
  $(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
      if (this.checked) {
        checkbox.each(function() {
          this.checked = true;
        });
      } else {
        checkbox.each(function() {
          this.checked = false;
        });
      }
    });
    checkbox.click(function() {
      if (!this.checked) {
        $("#selectAll").prop("checked", false);
      }
    });
  });
</script>