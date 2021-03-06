<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <title>Grafias System || Welcome</title>
</head>
<body>
  <header>
    <nav class = "navbar navbar-default navbar-light bg-light">
      <div id="logo">
        <img src="logo.png" alt="">
      </div>
      <div id="para1"></div>
      <div class="topnav">
        <ul class="menu">
          <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
          <li><a href="#"><i class="fas fa-user-circle"></i></a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div  class="row">
    <div class="col-lg-2 col-sm-12 col-md-4 main-container"  id="main">
      <div class="user-info">
        <div class="user-image">
          <img src="user.png" alt="">
        </div>
        <div class="user-name">
          <h5>Arjun Marasini</h5>
        </div>
      </div>
      <hr>
      <?php  include('includes/sidebar.php');?>

    </div>
    <div class="employees-main-container col-xs-10 col-lg-10 col-sm-10 col-md-8">
      <h5>Employees Details</h5>
      <hr>
        <div class="row employees-details-container">
          <div class="col-xs-12 col-lg-4 col-md-12 col-sm-12 employees-details-personal">
            <div class="emp-img">
              <img src="arjun.jpg" alt="">
            </div>
            <h3>Arjun Marasini</h3>
            <ul class="list-group">
              <li class="list-group-item"><span>Position: </span>Web Designer</li>
              <li class="list-group-item"><span>address: </span>Budanilkantha, Kathmandu</li>
              <li class="list-group-item"><span>Email Address: </span>arjun_some@gmail.com</li>
            </ul>
          </div>
          <div class="col-xs-12 col-lg-4 col-md-6 col-sm-12 employees-details-skills">
            <div class="container">
              <h3>Skills</h3>
              <hr>
              <h6>Web Design</h6>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                  80%
                </div>
              </div>
              <h6>Web Development</h6>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                  60%
                </div>
              </div>
              <h6>Communication</h6>
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                  30%
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-4 col-md-6 col-sm-12 employees-details-contact">
            <h3>Contact</h3>
            <hr>
            <ul>
              <li>Address: Budanilkantha</li>
              <li>Phone: +977-9847059929</li>
              <li>Primary Email: arjun.marasini10@gmail.com</li>
              <li>Secondary Email: nothing@gmail.com</li>
            </ul>
          </div>
        </div>
    </div>
  </div>
    <footer>
    <strong><i>Copyright &copy; Grafias Technology All Rights Reserved. licensed to Grafias Technology</i></strong>
  </footer>
</div>
<script src="main.js"></script>
</body>
</html>
