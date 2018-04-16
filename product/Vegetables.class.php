<?php 
namespace product;

class Vegetables extends Product
{
    public $mass;

    use ChangeDelivery;

    function __construct($name, $mass, $price, $description)
    {
        parent::__construct($name, $price, $description);
        $this->mass = $mass;
    }

    public function getPrice()
    {
        if ($this->mass) {
            if ($this->mass > 10) {
                return round($this->price * (1 - $this->discount));
            } else {
                return $this->price;
            }

        } elseif ($this->mass == null) {
            return 0;
        }
    }
    public function showProduct()
    {
        $endprice = $this->getPrice();
        $deliv = $this->getDelivery();
        echo " Товар: $this->name Масса: $this->mass Описание: $this->description Цена со скидкой: $endprice Цена доставки: $deliv  <br>";

    }
}

 ?>