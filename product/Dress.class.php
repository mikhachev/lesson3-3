<?php
namespace product;

class Dress extends Product implements Main
{
    public $size;

    function __construct($name, $size, $price, $description)
    {
        parent::__construct($name, $price, $description);
        $this->size = $size;
    }

    public function getPrice()
    {
        return round($this->price*(1- $this->discount));

    }

    public function showProduct()
    {
         $endprice = $this->getPrice();
         $deliv = $this->delivery;
         echo " Товар: $this->name Размер: $this->size Описание: $this->description Цена со скидкой: $endprice Цена доставки: $deliv <br>";

    }
}