<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--jQuery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--Latest compiled and minified JavaScript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="First Page.css" type="text/css">
  <title>Canteen Automation System</title>
</head>

<body style="background-color: rgb(218, 207, 207);">
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(27, 15, 27)">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#abc">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SRM Canteen</a>

      </div>
      <div class="collapse navbar-collapse" id="abc">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a>
          </li>
          <li><a href="order.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
          </li>
          <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active" style="margin-top: 4.5%">
        <img src="SEPM 108.jpg" alt="" width="755px" style="border-radius: 25px 25px 25px 25px;">
        <h2 style="margin-left: 325px; padding-top: 25px; color: black;">Pizza</h2>
      </div>

      <div class="item" style="margin-top: 4.5%">
        <img src="SEPM 103.jpg" alt="" width="710px" style="border-radius: 25px 25px 25px 25px;">
        <h2 style="margin-left: 285px; padding-top: 25px; color: black;">North Indian</h2>
      </div>

      <div class="item" style="margin-top: 4.5%">
        <img src="SEPM 28.jpg" alt="" width="720px" style="border-radius: 25px 25px 25px 25px;">
        <h2 style="margin-left: 230px; padding-top: 25px; color: black;">Veg Non-Veg Rolls</h2>
      </div>
    </div>




    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="menu">
    <div class="container">
      <div class="row">
        <a href="Breakfast.html">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="text-align: center; border-radius: 20px 20px 20px 20px;">
              <img class="item-image" src="SEPM 127.jpg" style="border-radius: 20px 20px 20px 20px;">
              <div class="caption">
                <h4 class="item-title">Breakfast</h4>
                <p class="item-price"> </p>

              </div>
            </div>
          </div>
        </a>

        <a href="Lunch.html">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="text-align: center; border-radius: 20px 20px 20px 20px;">
              <img class="item-image" src="SEPM 131.jpg" style="border-radius: 20px 20px 20px 20px;">
              <div class="caption">
                <h4 class="item-title">Lunch</h4>
                <p class="item-price"> </p>

              </div>
            </div>
          </div>
        </a>

        <a href="Dinner.html">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="text-align: center; border-radius: 20px 20px 20px 20px;">
              <img class="item-image" src="SEPM 137.jpg" style="border-radius: 20px 20px 20px 20px;">
              <div class="caption">
                <h4 class="item-title">Dinner</h4>
                <p class="item-price"> </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container-fluid"
      style="background-color: black; text-align: center; padding-bottom: 5px; padding-top: 7px;">
      <b>
        <p style="color:black;">
          Copyright <span class="glyphicon glyphicon-copyright-mark" style="color: black;"><b> SRM Canteen
              All Rights Reserved | Contact Us: 9999999991
            </b>
          </span>
        </p>
      </b>
    </div>
  </footer>
</body>

</html>