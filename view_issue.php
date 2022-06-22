
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/favicon.jpg">
        <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <?php
      include('session_staff.php');
    ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Stationary System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard_staff.php">Dashboard</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome to Admin Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Stationary System | Dashboard <small>Manage your stationary here</small></h1>
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the staff dashboard of TDK-Lamda Stationary System</li>
          </ol>
      </div>
    </section>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard_staff.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="viewbook_staff.php" class="list-group-item"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Stationary</a>
              <a href="addnewbook.php" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Add New Stationary</a>
              <a href="deletebook.php" class="list-group-item"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Delete Stationary</a>
              <a href="issue.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Stationary Order</a>
              <a href="addnewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add a Staff</a>
              <a href="viewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> View Staff</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-Description">Issue Register</h3>
            </div>
            <div class="panel-body">
              <?php
              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM issue_register");

              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>Stationary No</th>
              <th>Description</th>
              <th>empno</th>
              <th>Staff Name</th>
              <th>IssueDate</th>
              <th>ReturnDate</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "Issue Register is empty!!! Call a student and issue some items !!!";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['itemno'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['empno'] . "</td>";
                echo "<td>" . $row['stud_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['rdate'] . "</td>";
                }
              echo "</table>";
              mysqli_close($con);
              ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>