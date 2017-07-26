<?php

class PaypalIpn implements PaymentMethodInterface {
    public function processPayment()
    {
        return 'processPayent';
    }
}
