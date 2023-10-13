<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicio 5</title>

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
                        <a class="nav-link active" aria-current="page" href="../pages/ejercicio5.php">Ejercicio 5</a>
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

                <h2 class="main__h2">Ejercicio 5</h2>
            <div class="section"> 
                <table class="table"> <!-- Start of an HTML table with a border -->
                    <tr> <!-- Table row for column headers -->
                        <th>Decimal</th> <!-- Table header cell for 'Decimal' -->
                        <th>UNICODE</th> <!-- Table header cell for 'UNICODE' -->
                    </tr>
                    <?php
                        for ($i = 0; $i <= 200; $i++) { // Loop to generate rows in the table
                            $caracter = "&#$i;";// Generate the Unicode character entity
                            echo "<tr>"; // Start a new table row
                            echo "<td>$i</td>"; // Table cell with the decimal value
                            echo "<td>$caracter</td>"; // Table cell with the Unicode character
                            echo "</tr>"; // End the table row
                        }
                    ?>
                </table> 
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Include Bootstrap JavaScript library from CDN -->
</body>
</html>

