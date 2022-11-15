<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operaciones = $_POST['operacion']

if ($operaciones == "sumar") {

    $suma = $num1 + $num2;
    echo "El resultado de la suma es: ".$suma;
}
elseif ($operaciones == "restar") {

    $suma = $num1 - $num2;
    echo "El resultado de la resta es: ".$resta;
}
elseif ($operaciones == "multiplicar") {

    $suma = $num1 * $num2;
    echo "El resultado de la multiplicacion es: ".$mul;
}
elseif ($operaciones == "dividir") {

    $suma = $num1 / $num2;
    echo "El resultado de la division es: ".$div;
}

?>