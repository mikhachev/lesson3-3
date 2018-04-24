<?php 

namespace product;

class Drinks extends Product
{
    public $volume;

    function __construct($name, $volume, $price, $description)
    {
        parent::__construct($name, $price, $description);
        $this->volume = $volume;
    }
    public function getPrice()
    {
        return round($this->price *(1- $this->discount));
    }
    public function showProduct()
    {
        $endprice = $this->getPrice();
        $deliv = $this->delivery;
        echo " Товар: $this->name Объем, л: $this->volume Описание: $this->description Цена со скидкой: $endprice Цена доставки:$deliv  <br>";

    }
}

 ?>