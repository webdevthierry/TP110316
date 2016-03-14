<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TP Template Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>

  <body>

   <?php require_once "data.php"; ?>

   <?php require_once "navbar.php"; ?>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          <?php require_once "jumbotron.php"; ?>

          <?php require_once "panelHeading.php"; ?>

        </div><!--/.col-xs-12.col-sm-9-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

          <?php require_once "listGroup.php" ?>

        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <?php require_once "footer.php" ?>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
