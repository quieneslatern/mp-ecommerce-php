<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

if($_POST['topic'] == 'payment') {
  $payment = MercadoPago\Payment::find_by_id($id_mp);
  
  
  file_put_contents("WebHookNoti.txt",json_encode($_POST));
}

?>
