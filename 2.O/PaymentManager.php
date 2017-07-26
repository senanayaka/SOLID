<?php


class PaymentManager
{
    protected $paymentMethod;

    public function __construct(PaymentMethodInterface $paymentMethod){

        $this -> paypal =$paymentMethod;

    }

    public function process()
    {
        $this->paymentMethod->processPayment();
    }
}

