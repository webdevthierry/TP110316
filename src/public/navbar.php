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