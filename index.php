<?php 

require_once __DIR__ . '/DesktopGaming.php';
require_once __DIR__ . '/Desktop.php';
require_once __DIR__ . '/Laptop.php';
require_once __DIR__ . '/User.php';

// istanza desktop gaming
$hp_omen = new DesktopGaming('HP-Omen', '30L', '3700x', '16', '1024');
$hp_omen->scheda_video = '3080';
$hp_omen->rgb = true;
// var_dump($hp_omen->getInfoData());

// istanza laptop 
$x515 = new Laptop('Asus', 'X515', 'i5-9600U', '16', '512');
$x515->screen_resolution = '1080p';
$x515->keyboard_layout = 'UK';
// var_dump($x515->getInfoData());


// istanza desktop 
$hp_pavilion = new Desktop('HP', 'Pavilion-x400', 'Ryzen-3400u', '8', '512');
// var_dump($hp_pavilion->getInfoData());

// istanza utente 
$gigino = new User('Gigino', 'Marchetti', 'gigino00@gmail.com', '1234');

$gigino->addToCart($hp_omen);
$gigino->addToCart($x515);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello Utente</title>
</head>
<body>
    <h1>Carrello Utente <?php echo $gigino->name ?></h1>
    
    <ul>
        <?php foreach ($gigino->getCart() as $product) {?>
            <li>
                Marca: <?php echo $product->marca ?> <br>
                Modello: <?php echo  $product->modello ?>
            </li>
        <?php } ?>
    

    </ul>
</body>
</html>
