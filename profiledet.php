<!DOCTYPE html>
<head>
	<title>Home</title>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
   <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
<?php

$servername = "localhost";
$username = "id11671121_coderunner";
$password = "coderunner";
$dbname = "id11671121_coderunner";
$conn = new mysqli($servername, $username, $password, $dbname);

$active = "SELECT * FROM ActiveUser ORDER BY Time DESC LIMIT 1";
$res = $conn->query($active);
$row = $res->fetch_assoc();
$name = $row["Name"];



$conn->close();

?>



<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">codeRunner</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="practice.php">Practice</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li class="active"><a href="profiledet.php">Profile</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
            <li><a href="loginpage.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>

<div class="main">
        <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>User details:</h3>
            <h5>Name</h5>
            <h5>Email</h5>
            <h5>Age</h5>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>codeRunner specs:</h3>
            
              <h5>Points awarded:</h5>
              <h5>Levels completed:</h5>
            
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        
        <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title">Do you want to practice?</h3>
                  <a href="dashboard.html" class="redirect-btn">Yes</a>
                </div>
              </div>
      </div>
    </div>
    
  </div>
</body>
</html>
</div>