<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Ejercicio 8</title>

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
                        <a class="nav-link" href="../pages/ejercicio7.php">Ejercicio 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"  href="../pages/ejercicio8.php">Ejercicio 8</a>
                    </li>
                </ul>

                <h2 class="main__h2">Ejercicio 8</h2>
                <div class="section">
                    <h3 class="section__h3">Apartado 1</h3>
                    <?php
                        // Create a table for numbers 1 to 100
                        echo "<table class='table'>";
                        $n = 1;
                        for ($n1 = 1; $n1 <= 10; $n1++) {
                            echo "<tr class='tr'>";
                            for ($n2 = 1; $n2 <= 10; $n2++) {
                                echo "<td class='td'>", $n, "</td>";
                                $n = $n + 1;
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    ?>
                    <h3 class="section__h3">Apartado 2</h3>
                    <table class="table table__emo">
                        <?php
                            $filas = 10;
                            $columnas = 10;

                            for ($i = 0; $i < $filas; $i++) {
                                echo '<tr class="tr">';
                                for ($j = 0; $j < $columnas; $j++) {
                                    $numeroAleatorio = rand(1, 5);

                                    switch ($numeroAleatorio) {
                                        case 1:
                                            echo '<td class="td">&#128169;</td>'; // Emoji 1
                                            break;
                                        case 2:
                                            echo '<td class="td">&#128168;</td>'; // Emoji 2
                                            break;
                                        case 3:
                                            echo '<td class="td">&#127866;</td>'; // Emoji 3
                                            break;
                                        case 4:
                                            echo '<td class="td">&#128405;</td>'; // Emoji 4
                                            break;
                                        case 5:
                                            echo '<td class="td">&#129313;</td>'; // Emoji 5
                                            break;
                                    }
                                }
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </div> 
            </main> 
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

