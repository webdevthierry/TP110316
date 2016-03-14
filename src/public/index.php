<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Off Canvas Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>

  <body>

   <?php  require "data.php"; ?>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $navTitle; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <?php
          echo "<ul class='nav navbar-nav'>";
          foreach ($navList as $link)
          {
            if($link == "Home")
            {
              echo "<li class='active'> <a href='#'>" .$link. "</a></li>";
            }
            else
            {
            echo "<li> <a href='#'>" .$link. "</a></li>";
            }
          }
          echo "</ul>";
           ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <?php echo "<h1>" .$jumboTitle. "</h1>" ?>
            <?php echo "<p>" .$jumboParagraph. "</p>" ?>
          </div>
          <div class="bs-example data-example-id=table-within-panel"> 
            <div class="panel panel-default">  
              <div class="panel-heading"><?php echo $panelTitle ?></div> 
              <div class="panel-body"> 
                <?php echo "<p>" .$panelParagraph. "</p>" ?>

              </div>
              <table class="table"> 
                <thead> 
                  <tr> 
                 <?php    
                  foreach ($panelTableHead as $headTable)
                  {
                    echo "<th>" .$headTable. "</th>"; 
                  }
                  ?> 
                  </tr> 
                   
                </thead> 
                <tbody> 
                  
                    <?php
                    foreach($panelTableName as $number => $names)
                    {
                      echo "<tr>";
                      echo "<th>" .$number. "</th>";
                      if (is_array($names))
                      {
                        foreach ($names as $name => $value)
                        {
                          echo "<td>" .$value. "</td>";
                        }
                      }
                      echo "</tr>";
                    }
                     ?>
                  </tr>
                  
                </tbody> 
              </table> 
            </div>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <ul class="list-group">
            <li href="#" class="list-group-item active">Link 1<span class="badge">14</span></li>
            <li href="#" class="list-group-item">Link 2<span class="badge">14</span></li>
            <li href="#" class="list-group-item">Link 3<span class="badge">4</span></li>
            <li href="#" class="list-group-item">Link 4<span class="badge">1</span></li>
            <li href="#" class="list-group-item">Link 5<span class="badge">12</span></li>
            <li href="#" class="list-group-item">Link 6<span class="badge">0</span></li>
            <li href="#" class="list-group-item">Link 7<span class="badge">14</span></li>
            <li href="#" class="list-group-item">Link 8</li>
            <li href="#" class="list-group-item">Link 9</li>
            <li href="#" class="list-group-item">Link 10</li>
          </ul>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
