<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sales</title>

    <!-- Bootstrap core CSS -->
    <link href="docs/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="docs/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
  </head>
  <body role="document">
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">San Diego Homes</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="USER_neighborhoods.php">Neighborhoods</a></li>
            <li><a href="USER_homes.php">Homes</a></li>
            <li class="active"><a href="USER_sales.php">Sales</a></li>
            <li><a href="USER_homebuyer.php">Homebuyer</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    </div>
        <div class="row">
             <div class="col-sm-8 blog-main">
                <div class="blog-post">

          <?php
          $servername = "oniddb.cws.oregonstate.edu";
          $username   = "hesseljo-db";
          $password   = "UdHj518wuN4ZKkIY";
          $dbname     = "hesseljo-db";

          $mysqli = new mysqli($servername, $username, $password, $dbname);
          if ($mysqli ->connect_error) {
                        die("Connection failed: " . $mysqli ->connect_error);
                    } 
          if(!($stmt = $mysqli->prepare("INSERT INTO sales(list_price, sold_price, active) VALUES (?,?,?)"))){
            echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
          }
          if(!($stmt->bind_param("sss",
            $_POST['list_price'],
            $_POST['sold_price'],
            $_POST['active']))){
            echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
          }
          if(!$stmt->execute()){
            echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
          } else {
            echo "** Added " . $stmt->affected_rows . " rows to sales **";
          }
          ?>

          <form action="USER_sales.php">
            <input type="submit" class="btn btn-success" value="Return to Neighborhoods Database">
          </form><br><br>
          </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
