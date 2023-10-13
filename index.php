<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicios UT3_1 Estructuras de control - 2ºDAW</title>

        <link rel="stylesheet" href="./css/index.css">
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
                        <a class="nav-link active" aria-current="page" href="./index.php">Ejercicio 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>

                <div>
                    <h2 class="main__h2">Ejercicio 1</h2>
                    <?php
                        // Generate a random number between 0 and 1
                        $numeroAleatorio = rand(0, 1);

                        // Use the random number to select the image
                        if($numeroAleatorio == 0){
                            echo "<img src='./images/cara.jpeg'>";  
                        }else {
                            echo "<img src ='./images/cruz.jpeg'>";
                        }
                    ?>
                    <!-- Path to the coin flip result image -->

                    <a class="link" href="./index.php">Lanzar la moneda de nuevo</a>
                </div>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

