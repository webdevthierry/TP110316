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