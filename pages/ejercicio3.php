<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicio 3</title>

        <link rel="stylesheet" href="../css/ejercicio8.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="contenedor">
            <main class="main">
                <h1>Ejercicios UT3_1 Estructuras de control - 2ºDAW</h1>

                <p><strong>Nombre:</strong> Diego Rubio Serrano</p>
                <p><strong>Curso:</strong> 2º DAW</p>
                <p><strong>Módulo:</strong> Desarrollo Web en Entorno Servidor (DWES)</p>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Ejercicio 1</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio2.php">Ejercicio 2</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/ejercicio3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>

                <h2 class="main__h2">Ejercicio 3</h2>
                <div class="section"> 
                    <?php
                        $num1 = 4;
                        $num2 = 4;
                        $num3 = 4;

                        if ($num1 == $num2 && $num1 == $num3) {
                            echo "Hay 3 números iguales a " . $num1;
                        } elseif ($num1 == $num2) {
                            echo "Hay dos números iguales a " . $num1;
                        } elseif ($num1 == $num3) {
                            echo "Hay dos números iguales a " . $num1;
                        } elseif ($num2 == $num3) {
                            echo "Hay dos números iguales a " . $num2;
                        } else {
                            echo "No hay números iguales";
                        }
                    ?>
                </div>
            </main>
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Include Bootstrap JavaScript library from CDN -->
    </body>
</html>


