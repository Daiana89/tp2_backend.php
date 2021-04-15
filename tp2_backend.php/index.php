<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend.php</title>
</head>
<body>
    <?php 
    echo"<h2>ESTRUCTURAS DE CONTROL: PARTE 1</h2>";
    echo "<h4>1. Crear una variable n y validar que sea un número positivo.</h4>";
    $n=5;
    if ($n >=0){
        echo"n es un numero positivo";
    }else { 
        echo "n es un numero negativo";

    }    
    echo "<br>";
    echo "<h4>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h4>";
    $n=5;
    if ($n >=1 and $n <=10 ){
        echo"n es mayor a 1 y menor a 10";
    } else{
        echo"n no es ni mayor a 1 ni menor a 10";
    }
    echo"<br>";
    echo "<h4>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.";
    echo"<br>";
    echo"<br>";
    $n=5;
    if ($n <=2){
        echo"n es menor a 2";
    }elseif ($n >=10){
        echo"n es mayor a 10";
    } else{
        echo"n no es ni menor a 2 ni mayor a 10";
    }

    echo"<br>";
    echo "<h4>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.";
    echo"<br>";
    echo"<br>";
    $numero1=10;
    $numero2=10;
    if ($numero1 > $numero2){
        echo"La suma de ambos números es:",$numero1 + $numero2;
        echo"<br>";
        echo"<br>";
        echo"La resta de ambos números es:",$numero1 - $numero2;
    }elseif ($numero1 < $numero2){
        echo"La multiplicacion de ambos números es:",$numero1 * $numero2;
        echo"<br>";
        echo"<br>";
        echo"La multiplicacion de ambos números es:",$numero1 / $numero2;
        echo"<br>";
        echo"<br>";
        echo"El resto de la división es:0";
    } elseif ($numero1 == $numero2) {
        echo"Los números ingresados son iguales";
    }

    ?>
    
</body>
</html>