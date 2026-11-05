<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        require_once __DIR__ . '/../vendor/autoload.php';
        echo '<h1>Proyecto: relacion1.ejercicio3</h1>';
        echo '<p>PHP ' . phpversion() . '</p>';
        
        $dado1 = random_int(1,6);
        $dado2 = random_int(1,6);
        
        // 2. Enlaces reales de las imágenes de Wikipedia para el DADO 1
        if ($dado1 == 1) { $url1 = "https://wikimedia.org"; }
        if ($dado1 == 2) { $url1 = "https://wikimedia.org"; }
        if ($dado1 == 3) { $url1 = "https://wikimedia.org"; }
        if ($dado1 == 4) { $url1 = "https://wikimedia.org"; }
        if ($dado1 == 5) { $url1 = "https://wikimedia.org"; }
        if ($dado1 == 6) { $url1 = "https://wikimedia.org"; }
        
        // 3. Enlaces reales de las imágenes de Wikipedia para el DADO 2
        if ($dado2 == 1) { $url2 = "https://wikimedia.org"; }
        if ($dado2 == 2) { $url2 = "https://wikimedia.org"; }
        if ($dado2 == 3) { $url2 = "https://wikimedia.org"; }
        if ($dado2 == 4) { $url2 = "https://wikimedia.org"; }
        if ($dado2 == 5) { $url2 = "https://wikimedia.org"; }
        if ($dado2 == 6) { $url2 = "https://wikimedia.org"; }
    ?>

    <!-- 4. Pintamos las imágenes en HTML pasando la variable PHP al 'src' -->
    <div style="margin: 20px;">
        <img src="<?php echo $url1; ?>" width="100" height="100" alt="Dado 1">
        <img src="<?php echo $url2; ?>" width="100" height="100" alt="Dado 2">
    </div>
    <p>Has sacado un <?php echo $dado1; ?> y un <?php echo $dado2; ?>.</p>

    <?php
    // 5. Comprobar si son pareja (Igual que en Java)
    if ($dado1 == $dado2) {
        echo "<p><b>¡Es una pareja!</b></p>";
    } else {
        echo "<p>No son pareja.</p>";
    }

    // 6. Comprobar el mayor
    if ($dado1 > $dado2) {
        echo "<p>El mayor es: " . $dado1 . "</p>";
    } else {
        echo "<p>El mayor es: " . $dado2 . "</p>";
    }
    ?>
</body>
</html>