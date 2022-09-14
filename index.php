<?php
    include_once("html/encabezado.html");
    include_once("php/juegos.php");
?>

<?php
    // Inicializo el total recaudado por cada juego

    $totalRust = 0;
    $totalGTA = 0;
    $totalHogwarts = 0;
    $totalRedDead = 0;
    $totalElder = 0;
    $totalSpider = 0;
    $totalCult = 0;

    // Inicializo los contadores de juegos vendidos

    $cantRust = 0;
    $cantGTA = 0;
    $cantHogwarts = 0;
    $cantRedDead = 0;
    $cantElder = 0;
    $cantSpider = 0;
    $cantCult = 0;

    for ($i = 0; $i < 1000; $i++){

        $juego = array_rand($juegos);
        $precio = $juegos[$juego];

        if ($i <= 10){
            $precio *= 0.1;
        } else if ($i <= 200){
            $precio *= 0.3;
        } else if ($i <= 500){
            $precio *= 0.5;
        } else {
            $precio *= 0.6;
        }

        switch ($juego) {
            case 'Rust':
                $cantRust++;
                $totalRust += $precio;
                break;

            case 'Grand Theft Auto V':
                $cantGTA++;
                $totalGTA += $precio;
                break;
                
            case 'Hogwarts Legacy':
                $cantHogwarts++;
                $totalHogwarts += $precio;
                break;

            case 'Red Dead Redemption II':
                $cantRedDead++;
                $totalRedDead += $precio;
                break;

            case 'Elden Ring':
                $cantElder++;
                $totalElder += $precio;
                break;

            case 'Spider-Man Remastered':
                $cantSpider++;
                $totalSpider += $precio;
                break;

            case 'Cult Of The Lamb':
                $cantCult++;
                $totalCult += $precio;
                break;
        }

    }

    $totalRecaudado = $totalRust + $totalGTA + $totalHogwarts + $totalRedDead + $totalElder + $totalSpider + $totalCult;
    echo('<p class="total">Total Recaudado: $' . number_format($totalRecaudado, 2, ',', '.') . '</p>');
?>
<p class="resumen">Resumen ventas:</p>

<section id="tabla">
    <table>
        <thead>
            <tr>
                <th>Juego</th>
                <th>Cantidad</th>
                <th>Recaudación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rust</td>
                <td> <?php echo $cantRust; ?> </td>
                <td> <?php echo $totalRust= number_format($totalRust, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Grand Theft Auto V</td>
                <td> <?php echo $cantGTA; ?> </td>
                <td> <?php echo $totalGTA = number_format($totalGTA, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Hogwarts Legacy</td>
                <td> <?php echo $cantHogwarts; ?> </td>
                <td> <?php echo $totalHogwarts = number_format($totalHogwarts, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Red Dead Redemption II</td>
                <td> <?php echo $cantRedDead; ?> </td>
                <td> <?php echo $totalRedDead = number_format($totalRedDead, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Elden Ring</td>
                <td> <?php echo $cantElder; ?> </td>
                <td> <?php echo $totalElder = number_format($totalElder, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Spider-Man Remastered</td>
                <td> <?php echo $cantSpider; ?> </td>
                <td> <?php echo $totalSpider = number_format($totalSpider, 2, ',', '.'); ?> </td>
            </tr>
            <tr>
                <td>Cult Of The Lamb</td>
                <td> <?php echo $cantCult; ?> </td>
                <td> <?php echo $totalCult = number_format($totalCult, 2, ',', '.'); ?> </td>
            </tr>
        </tbody>
    </table>
</section>

<?php
    include_once("html/pie.html");
?>
