<?php 
    echo "<ul class='list-group'>";
      foreach($listGroup as $item => $badge)
      {
        if ($item === "Link 1")
        {
          echo "<li href='#' class='list-group-item active'>" .$item. "<span class='badge'>" .$badge. "</span></li>";
        }
        elseif($item)
        {
          echo "<li href='#' class='list-group-item'>" .$item. "<span class='badge'>" .$badge. "</span></li>";
        }
      	else
        {
          echo "<li href='#' class='list-group-item'>" .$badge. "</li>";
        }
      }
    echo "</ul>";
