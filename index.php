<?php 

require_once __DIR__ . '/DesktopGaming.php';
require_once __DIR__ . '/Laptop.php';

// istanza desktop gaming
$hp_omen = new DesktopGaming('HP-Omen', '30L', '3700x', '16', '1024');
$hp_omen->Scheda_Video = '3080';
$hp_omen->rgb = true;
var_dump($hp_omen->getInfoData());

// istanza laptop 
$x515 = new Laptop('Asus', 'X515', 'i5-9600U', '16', '512');
$x515->screen_resolution = '1080p';
$x515->keyboard_layout = 'UK';
var_dump($x515->getInfoData());
?>