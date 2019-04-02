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
    echo "<table border =1 >";
    echo "<tr>";
    $i=1;
    while ($i <= $n1) {
      echo "<tr><td>".$i."</td></tr>";

      $i++; //$i = $i}
    }

    $i=$n1;
    while ($i > 0) {
      echo "<tr><td>".$i."</td></tr>";
      $i--; //$i = $i
    }
    echo "</tr>";
    echo "</table>";



    //1
    echo "<b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>1) Escriba un Script en PHP que  muestre por pantalla los números del 1 al 10 (Sin hacer uso de ninguna estructura tipo bucle)</b><br>";
    echo "<br>1 ";  echo "2 "; echo "3 "; echo "4 "; echo "5 "; echo "6 "; echo "7 "; echo "8 "; echo "9 "; echo "10 ";

    //2
    echo "<br><b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>2) Escriba un Script en PHP que  muestre por pantalla los números del 1 al 10</b><br>";

    echo "<br><table border =1>";
    $o=1;
    while ($o <= 10) {
      echo "<td>".$o."</td>";
      $o++; //$i = $i
    }
    echo "</table>";

    //3
    echo "<b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>3) Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales.</b><br>";

    echo "<br><table border =1>";
    $o=1;
    while ($o <= 100) {
      echo "<td>".$o."</td>";
      $o++; //$i = $i
    }
    echo "</table>";

    //4
    echo "<b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>4) Escriba un Script en PHP que muestre por pantalla los primeros 100 números naturales de 2 en 2</b><br>";

    echo "<br><table border =1>";
    for($i = 0; $i <= 100; $i +=2 )
    echo "<td>".$i."</td>";
    echo "</table>";

    //5
    echo "<b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>5) Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla. Use la función rand().</b><br>";

    $x = 1;
    echo "<br><table border =1>";
    for ($x=1; $x<=10; $x++) {
        $ale = rand(1,100);
        echo "<td>".$ale."</td>";
        }
    echo "</table>";

    //6
    echo "<b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>6) Escriba un Script en PHP que muestre por pantalla la suma de los primeros 100 números naturales</b><br>";

    $suma=0;
    echo "<br><table border =1>";
    for ($x=1; $x<=100; $x++) {
        echo "<td>".$x."</td>";
        $suma += $x;
        }

    echo "</table>";
    echo "La suma de los valores es:",$suma;


    //7
    echo "<br><b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>7) Escriba un Script en PHP que muestre por pantalla los múltiplos de 3 comprendidos en la serie del 1 al 100.</b><br>";

    echo "<br><table border =1>";
    for($i = 3; $i <= 100; $i +=3 )
    echo "<td>".$i."</td>";
    echo "</table>";

    //8
    echo "<br><b> ------------------------------------------------------------------------------------------------------------</b>";
    echo "<br><b>8) Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y los muestre por pantalla, y visualice además el
          siguiente reporte en una tabla HTML:
          <br>- Total de números pares generados.
          <br>- Total de números impares generados</b><br>";

    $par=0;
    $impar=0;
    echo "<br><table border =1>";
    for ($i=1 ; $i<=10; $i++) {
        $ale = rand(1,100);
    if ($ale % 2==0) {
        $par=$par+1;
        }
    else {
            $impar=$impar+1;
          }
            echo "<td>".$ale."</td> ";
              }
      echo "</table>";

      echo "<table border =1>";
      echo "<br><tr><td> Total de números pares generados.</td><td> ".$par." </td></tr>";
      echo "<tr> <td> Total de números impares generados</td><td> ".$impar." </td></tr>";
      echo "</table>";

      //9
      echo "<br><b> ------------------------------------------------------------------------------------------------------------</b>";
      echo "<br><b>9) Escriba un Script en PHP que genere aleatoriamente 10 números enteros positivos y negativos, y los  muestre  por  pantalla,  y  visualice además el siguiente reporte en una tabla HTML:
            <br>-Total de números positivos pares generados.
            <br>-Total de números positivos impares generados.
            <br>-Total de números negativos pares generados.
            <br>-Total de números negativos impares generados
            </b><br>";

      $par_pos=0;
      $impar_pos=0;
      $par_neg=0;
      $impar_neg=0;

      echo "<br><table border=1>";

      for ($i=1;$i<=10;$i++) {
          $ale = rand(-100,100);
            echo "<td>".$ale." </td>";
              if($ale > 0  &&  ($ale%2)==0){
                  $par_pos=$par_pos+1;
              }else if ($ale > 0  && (($ale % 3)==0 || ($ale % 3)!=0)) {
                $impar_pos=$impar_pos+1;
              }if($ale < 0  &&  ($ale % 2)==0){
                $par_neg=$par_neg+1;
                }else if ($ale < 0  && (($ale%3)==0 || ($ale % 3)!=0)) {
                  $impar_neg=$impar_neg+1;
              }
        }
        echo "</table>";

        echo "<br><table border=1>";
        echo "<td> Total de Numeros postivos pares: </td> <td>".$par_pos."</td>";
        echo "<tr><td> Total de Numeros postivos impares: </td> <td>".$impar_pos."</td></tr>";
        echo "<tr><td> Total de Numeros negativos pares: </td> <td>".$par_neg."</td></tr>";
        echo "<tr><td> Total de Numeros negativos impares: </td> <td>".$impar_neg."</td></tr>";
        echo "</table>";

        //10
        echo "<br><b> ------------------------------------------------------------------------------------------------------------</b>";
        echo "<br><b>Scripts PHP con Formulario HTML5 </b><br>";
        echo "<br><b>10) Escriba un Script en PHP que solicite por pantalla al usuario un número N, y de ese número ingresado se visualice la tabla de multiplicar respectiva con una serie de 1 a 10.
        <br>(Haga uso de un solo archivo para crear formulario html y Script php). </b><br>";



        $n2=$_POST ["num2"];
        echo "<table border =1 align = center>";
          for($h=1; $h<=10; $h++)
          {
            echo "<tr><td align=center>$n2</td>
                      <td align=center>x</td>
                      <td align=center>$h</td>
                      <td align=center>=</td>
                      <td align=center> ". ($h*$n2) . "</td>
                  </tr>";
          }
          echo "</table> ";

?>


       <form name=frm2 action="serie.php" method="POST">
          <table border="1" align="center">
            <tr>
                <td align=center> <font face="Trebuchet MS" size="16" color="#627EC1">TABLA DE MULTIPLICAR</font> </td>
            </tr>

            <tr>
               <td font face="Trebuchet MS" size="3" > Digite numero: <font color="codigocolor"></font> </font> </td>
            </tr>

            <tr>
              <td> <input type="number" name="num2" placeholder="Digite numero" ><br></td>
            </tr>

          </table>
            <center><input  type="submit" value="Calcular"></center>

        </form>
    </body>
</html>
