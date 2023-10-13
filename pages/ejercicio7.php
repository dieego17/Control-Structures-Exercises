<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicio 7</title>

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
                        <a class="nav-link" href="../pages/ejercicio3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio5.php">Ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ejercicio6.php">Ejercicio 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>

                <h2 class="main__h2">Ejercicio 7</h2>
            <div class="section"> 
                <h3 class="section__h3">BUSCA LA FRUTA</h3> 
                <p>Actualice la página para mostrar otra búsqueda</p> 
                <?php
                    $minUnicode = 127815; // Minimum Unicode value for fruit symbols
                    $maxUnicode = 127827; // Maximum Unicode value for fruit symbols

                    // Initialize a string to store random fruits
                    $frutasAleatorias = '';

                    $cantidadFrutas = rand(7, 20); // Generate a random number of fruits to display

                    // Variable to store the chosen fruit
                    $frutaElegida = null;

                    for ($i = 1; $i <= $cantidadFrutas; $i++) {
                        $frutaAle = "&#".rand($minUnicode, $maxUnicode).";"; // Generate a random fruit Unicode entity
                        $frutasAleatorias .= $frutaAle . ' '; // Add the current fruit to the string

                        // Choose a random fruit to count (one of the generated ones)
                        if ($i === $cantidadFrutas) {
                            $frutaElegida = $frutaAle;
                        }
                    }

                    $contador = substr_count($frutasAleatorias, $frutaElegida); // Count occurrences of the chosen fruit
                    echo "<strong>$cantidadFrutas frutas</strong>";
                    echo "<p>$frutasAleatorias</p>"; // Display the list of random fruits
                    echo "<strong>Resultado</strong>";
                    echo "<p>La fruta ".$frutaElegida." está ".$contador." veces en la lista.</p>"; // Display the chosen fruit and its count
                ?>
            </div>
        </main> 
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Include Bootstrap JavaScript library with integrity and crossorigin attributes -->
</body>
</html>


