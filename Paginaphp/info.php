<?php
/**  $saludos  = "Hola a todos, esto es desde PHP";
  echo $saludos;
  **/
  /**$valor_1 = 10;
  $valor_2 = 50;
  $valor_2+=$valor_1;
  echo $valor_2;
  **/
/**  $valor_1  = 7;
  for ($i=0; $i <=10 ; $i++) {
    $total= $valor_1*$i;
    echo "$valor_1 X $i = <b>$total</b> <br>";
  }
  **/

  /**  $valor_1 = 110;
    $valor_2  = 100;
  if ($valor_1==$valor_2) {
      echo "Los numeros son iguales, Saludos!!";
  }else {
    if ($valor_1 > $valor_2) {
        echo " El numero $valor_1 es mayor que el $valor_2 , Saludos!!";
    }else {
      echo "El numero $valor_1 es menor que $valor_2, Saludos";
    }
  }
  **/
  /**
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  echo "Hola $nombre $apellido";
  **/

/**  $num  = $_POST['num'];
  for ($i=0; $i <= 10 ; $i++) {
    $total  = $num*$i;
    echo " EL $num X $i es: $total <br>";
  }**/
  $valor_1  = $_POST['num_1'];
  $valor_2  = $_POST['num_2'];

  if ($valor_1==$valor_2) {
    echo "El numero $valor_1 es igual a el numero $valor_2";
  }else {
    if ($valor_1 > $valor_2) {
      echo "El numero $valor_1 es mayor que $valor_2";
    }else {
      echo "El numero $valor_2 es mayor que $valor_1";
    }
  }
 ?>
