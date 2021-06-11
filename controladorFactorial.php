    <?php
    //Asegurarme de que llegan los datos

    $boton = $_POST['btnCalcular'];
    $numero = $_POST['numero'];
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $anio = $_POST['anio'];
    $tabla = $_POST['tabla'];
    /*
Extraer todos los vaalores de un html a través de un método
extract($_POST);
*/


    /*
$_POST();
$_GET();
$_REQUEST();
*/

    if (isset($boton) and $numero > 0) {
        $inicio = 1;
        $factorial = 1;
        while ($inicio <= $numero) {
            $factorial = $factorial * $inicio;
            $inicio++;
        }
        echo "El factorial del número: " . $numero . " es " . $factorial;
    }

    echo "<hr>";
    echo "<h1>Area del triangulo</h1>";

    if (isset($boton) and $base > 0 and $altura > 0) {
        $area = ($base * $altura) / 2;
    }
    echo "El area del triangulo es: " . $area;

    echo "<hr>";
    echo "<h1>Edad de una persona partiendo de su año de nacimiento</h1>";

    if (isset($boton) and $anio > 0) {
        $edad = 2021 - $anio;

        echo "La edad es: " . $edad;
    }

    echo "<hr>";
    echo "<h1>Tabla de multiplicar de cualquier número</h1>";

    if (isset($boton) and $tabla > 0) {

        for ($multi = 1; $multi <= 10; $multi++) {
            $resultado = $tabla * $multi;
            echo $tabla . " x " . $multi . " es igual a " . $resultado . "<br>";
        }
    }

    ?>
