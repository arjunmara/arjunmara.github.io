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
    <div class="col-lg-10 col-sm-12 col-md-8 content-container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 welcome">
          <h3>Welcome to Dashboard</h3>
          <hr>
        </div>
        <div class="home-grid col-lg-8">
          <h3>Notices</h3>
          <hr>
          <p>
            Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum odit eos repudiandae, accusamus velit, assumenda alias accusantium porro praesentium totam libero. Odio ipsum soluta quam dolorum quisquam fuga error, natus autem voluptatibus minus eos accusamus vitae consectetur earum doloremque vel aspernatur porro, voluptatum sunt excepturi tempore totam. Illo, incidunt minus! amet, consectetur adipisicing elit. Reprehenderit reiciendis labore numquam aperiam minima earum fugit in, rem vitae fugiat sequi incidunt. Quod cumque ex placeat odit soluta, nam consectetur praesentium nostrum architecto hic quisquam ducimus sapiente mollitia repellendus voluptatem tempora id aliquam molestias laboriosam natus dignissimos molestiae ratione omnis.
          </p>
          <p>
            Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum odit eos repudiandae, accusamus velit, assumenda alias accusantium porro praesentium totam libero. Odio ipsum soluta quam dolorum quisquam fuga error, natus autem voluptatibus minus eos accusamus vitae consectetur earum doloremque vel aspernatur porro, voluptatum sunt excepturi tempore totam. Illo, incidunt minus! amet, consectetur adipisicing elit. Reprehenderit reiciendis labore numquam aperiam minima earum fugit in, rem vitae fugiat sequi incidunt. Quod cumque ex placeat odit soluta, nam consectetur praesentium nostrum architecto hic quisquam ducimus sapiente mollitia repellendus voluptatem tempora id aliquam molestias laboriosam natus dignissimos molestiae ratione omnis.
          </p>
        </div>
        <div class="projects col-lg-4">
          <h3>Recent Projects</h3>
          <hr>
          <div>
          <!-- <div class="projects-running">
            <div class="progress-bar">
              <div class="progress">

              </div>
            </div>
          </div> -->
                  <div class="container">
                    <h5>Rastriya Dainik</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80%
                      </div>
                    </div>
                    <h5>Rastriya Dainik</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        60%
                      </div>
                    </div>
                    <h5>Rastriya Dainik</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                        30%
                      </div>
                    </div>
                  </div>
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
