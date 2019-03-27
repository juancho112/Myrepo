<?php

//Mi calculadora
    $n1=$_POST ["num1"];
    $n2=$_POST ["num2"];
    $op=$_POST ["operacion"];


    echo "Numero 1:".$n1;
    echo "<br> Numero 2:".$n2;
    echo "<br> operacion:".$op;


    switch ($op) {
        case '1':
          echo "<br>La suma es".($n1+$n2);
          break;
        case '2':
            echo "<br>La resta es".($n1-$n2);
            break;
        case '3':
              echo "<br>La multiplicacion es".($n1*$n2);
              break;
        case '4':
                echo "<br>La division es".($n1/$n2);
                break;
        default:
            echo "<br>Opcion incorrecta";
    }





 ?>
