<?php

    //Escriba un Script en PHP que muestre por pantalla los números del 1
    //al 10
    echo "<b>2) lista de numeros con while</b>";
    echo "<table border =1>";
    $i=1;
    while ($i <= 10) {
      echo "<tr><td bgcolor='YELLOW'>".$i."</td></tr>";
      $i++; //$i = $i
    }

    echo "</table>";

    echo "<b> --------------------------------------------------------------------------------------</b>";

    echo "<b> lista de numeros con while</b>";
    echo "<table border =1>";
    $i=1;
    while ($i <= 10) {
      echo "<td>".$i."</td>";
      $i++; //$i = $i
    }

    echo "</table>";

    echo "<b> --------------------------------------------------------------------------------------</b>";

    echo "<b> lista de numeros con while</b>";
    echo "<table border =1>";
    $i=1;
    while ($i <= 10) {
      
      if (($i%2)==0) {
          echo "<td bgcolor='RED'>".$i."</td>";
      }
      else {
        echo "<td bgcolor='BLUE'>".$i."</td>";
      }
      $i++; //$i = $i
    }

    echo "</table>";




 ?>
