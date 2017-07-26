<?php


class driver
{

    protected $car;


    public function __construct(car $car)
    {
        $this->car =$car;

    }



    public function go()
    {
        $this->car->drive();

    }

}