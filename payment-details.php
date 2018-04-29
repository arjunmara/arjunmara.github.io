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
    <div class="col-lg-2 col-sm-12 col-md-4 col-xs-12 main-container"  id="main">
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
    <div class="col-lg-12 col-sm-12 col-md-8 col-xs-12">
      <div class="table-responsive">
          <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th>Clients Name</th>
                      <th>Domains Name</th>
                      <th>Client's Status</th>
                      <th>Client Since</th>
                      <th>Expiry Date</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>Arjun Travels</td>
                        <td>arjunmarasini.com</td>
                        <td>Active</td>
                        <td>2018/04/24</td>
                        <td>2018/04/24</td>
                      </tr>
                    </tbody>
              </table>
    </div>
    <div class="row">
      <div class="info-payment col-lg-8 col-md-8 col-sm-12">
        <h4>Payment Status</h4>
        <hr>
        <table class ="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Payment Year</th>
                  <th>Total Amount</th>
                  <th>Received Amount</th>
                  <th>Pending Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2018</td>
                  <td>25000</td>
                  <td>20000</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>2018</td>
                  <td>25000</td>
                  <td>20000</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>2018</td>
                  <td>25000</td>
                  <td>20000</td>
                  <td>5000</td>
                </tr>
              </tbody>
        </table>
      </div>

      <div class="info-clients col-lg-4 col-md-4 col-sm-12">
        <div class="info-clients-heading">
          <h1>Remarks</h1>
        </div>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi veniam minus impedit tenetur quasi officia delectus repellat ipsam asperiores! Ullam placeat aspernatur repellat voluptatibus facilis molestiae fugit iure, aliquam unde exercitationem, asperiores dicta, odit inventore! Suscipit iste ex accusamus! Minima.</p>
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
