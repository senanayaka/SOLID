<?php


spl_autoload_register(function($class){

    require_once "{$class}.php";

});


$paypalIpn = new PaypalIpn();

$CreditCard = new CreditCard();

$paymentManager = new PaymentManager($CreditCard);

$paymentManager->process();

