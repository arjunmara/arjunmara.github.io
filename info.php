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
    <div class="col-lg-2 col-sm-4 col-md-4 main-container"  id="main">
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
    </div><!--side bar close!-->
    <div class="col-lg-10 col-sm-8 col-md-8 content-container">
        <div class="info-main">
          <div class="expiry">
            <div class="row">
              <div class="info-title col-lg-12 col-sm-12 col-md-12">
                <div class="info-heading">
                  <h4>Information About The Domains</h4>
                </div>
                <hr>
              </div>
                <div class="col-lg-3 col-sm-3 col-md-3 info-expiry">
                  <h6>Expired Domains</h6>
                  <h4>18</h4>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3 info-expiry">
                  <h6>Expires this Week</h6>
                  <h4>14</h4>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3 info-expiry">
                  <h6>Expires this month</h6>
                  <h4>148</h4 >
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3 info-expiry">
                  <h6>Expires in three months</h6>
                  <h4>148</h4 >
                </div><!--expiry info closes here!-->
                <div class="col-lg-12 col-sm-12 col-md-8 content-container">
                  <!--domain content  -->
                  <div class="line">
                    <hr>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                      <span>Expires This</span>
                      <select>
                        <option value="day">Day</option>
                        <option value="week">Week</option>
                        <option value="month">Month</option>
                        <option value="threeMonths">Three Months</option>
                      </select>
                      <span>Entries</span>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                      <div class="search">
                        <span>Search:</span>
                        <input class="search-box" type="text" name="" id="" placeholder="Search">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Expiry Date</th>
                          <th>Payment</th>
                          <th>Details</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                          <tr>
                            <td>Arjun marasini</td>
                            <td>Active</td>
                            <td>2018/4/29</td>
                            <td>4000 of 9000</td>
                            <td><a class="btn btn-sm btn-success" href="payment-details.html">See more</a></td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div><!--content container closed-->

  </div><!--main div close!-->
    <footer>
    <strong><i>Copyright &copy; Grafias Technology All Rights Reserved. licensed to Grafias Technology</i></strong>
  </footer>
<script src="main.js"></script>
</body>
</html>
