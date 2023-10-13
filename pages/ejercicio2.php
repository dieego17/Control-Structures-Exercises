<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicio 2</title>

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
                        <a class="nav-link active" aria-current="page" href="../pages/ejercicio2.php">Ejercicio 2</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio3.php">Ejercicio 3</a>
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

                <h2 class="main__h2">Ejercicio 2</h2>
                <div class="section">
                    <?php
                        // Generate a random number between 1 and 10
                        $numAle = rand(0, 10);
                        echo $numAle . "<br>";

                        // Check the value of $numAle and display the corresponding message
                        if ($numAle >= 0 && $numAle < 5) {
                            echo "Insuficiente";
                        } elseif ($numAle >= 5 && $numAle < 6) {
                            echo "Suficiente";
                        } elseif ($numAle >= 6 && $numAle < 7) {
                            echo "Bien";
                        } elseif ($numAle >= 7 && $numAle < 9) {
                            echo "Notable";
                        } elseif ($numAle >= 9 && $numAle <= 10) {
                            echo "Sobresaliente";
                        }
                    ?>
                </div> 
            </main> 
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html> 

