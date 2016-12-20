<?php

//Product Class
class Product
{
    public $name;
    public $price;
    public $discount;

    function get_name()
    {
        return $this->name;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_price()
    {
        return $this->price;
    }

    function set_price($price)
    {
        $this->price = $price;
    }

    function get_discount()
    {
        return $this->discount;
    }

    function set_discount($discount)
    {
        $this->discount = $discount;
    }
}
?>
