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
      <div class="lmanager-heading">
        <h4>Leave and Holidays</h4>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-10 col-sm-12 col-md-12 leaves-container">
          <div class="contain">
            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis harum non inventore numquam perferendis accusamus, minima a tempora voluptatibus cupiditate quae consequatur. Asperiores pariatur debitis, cupiditate officiis id doloremque obcaecati incidunt veritatis quam consequatur. Officiis at nemo officia temporibus veniam provident, velit aliquid amet, et, quibusdam inventore voluptatibus labore animi? consectetur adipisicing elit. Ex, magni, voluptate! Eos, provident quibusdam ab amet cum harum perferendis quae pariatur, cupiditate fugiat dolorem illum similique ex quos eveniet iure animi odit consequatur tenetur praesentium! Soluta porro delectus molestias perspiciatis laborum, illo suscipit quia! Enim animi odio ex eveniet beatae?</p>
          </div>
        </div>
        <div class="col-lg-10 col-sm-12 col-md-12 leaves-table-container">
              <h4>Leave Information</h4>
              <table class="table table-striped table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Leave Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Arjun Marasini</td>
                    <td>2018/4/21</td>
                    <td>2018/4/29</td>
                    <td>travelling to USA in Qatar Airways</td>
                  </tr>
                  <tr>
                    <td>Nischal Rana</td>
                    <td>2018/4/21</td>
                    <td>2018/4/29</td>
                    <td>Travelling to Germany in Qatar Airways</td>
                  </tr>
                </tbody>
              </table>
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
