<html>

    <head>
       <title> Series </title>
       <link rel="icon" type="image/ico" href="icons/cart.png"/>
    </head>

    <body bgcolor="62C1B1">  <br>
      <form name=frm1 action="serie.php" method="POST">
         <table border="1" align="center">
           <tr>
               <td align=center> <font face="Trebuchet MS" size="16" color="#627EC1">SERIES</font> </td>
           </tr>

           <tr>
              <td font face="Trebuchet MS" size="3" > Digite numero: <font color="codigocolor"></font> </font> </td>
           </tr>

           <tr>
             <td> <input type="number" name="num1" placeholder="Digite numero" ><br></td>
           </tr>

         </table>
           <center><input  type="submit" value="Calcular"></center>

       </form>
    </body>
</html>

<?php

    $n1=$_POST ["num1"];

    echo "Numero :".$n1;
    echo "<table border =1>";
    $i=$n1;
    while ($i > 0) {
      echo "<td>".$i."</td>";
      $i--; //$i = $i
    }
    echo "</table>";



    echo "Numero :".$n1;
    echo "<table border =1>";
    $i=1;
    while ($i <= $n1) {
      echo "<td>".$i."</td>";
      $i++; //$i = $i
    }
    echo "</table>";


    echo "Numero :".$n1;
    echo "<table border =1>";
    $i=1;
    while ($i <= $n1) {
      echo "<tr><td>".$i."</td></tr>";

      $i++; //$i = $i}
    }
    $i=$n1;
    while ($i > 0) {
      echo "<td>".$i."</td>";
      $i--; //$i = $i
    }


    echo "</table>";


    echo "Numero :".$n1;
    echo "<table border =1>";
    $i=$n1;
    while ($i > 0) {
      echo "<tr><td>".$i."</td></tr>";
      $i--; //$i = $i
    }
    echo "</table>";



?>
