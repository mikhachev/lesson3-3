<?php 
namespace product;

$pathToInterfaceFile = 'core' . DIRECTORY_SEPARATOR ."Main". '.interface.php';
include "$pathToInterfaceFile";

abstract class Product implements Main
{
    public $discount = 0.1;
    public $name;
    public $price;
    public $description;
    public $delivery = 300;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    abstract public function getPrice();
    abstract public function showProduct();


	function getDiscount()
	{
		if ($this->weight) {
			if ($this->weight > 10) {
				return round($this->price - ($this->price * $this->value / 100));
			} else {
				return $this->price;
			}
			
		} elseif($this->weight == null) {
			return round($this->price -($this->price * $this->value / 100));
		}
	}

	function getDeliverPrice()
	{
		if ($this->getDiscount() == $this->price) {
			return "250 руб.";
		} else {
			return "300 руб.";
		}
	} 

	function getFullDescription() {
		echo "{$this->name} {$this->type} цена  {$this->getDiscount()} руб.  <br/> {$this->title}  <br/> цена доставки {$this->getDeliverPrice()}";
	}  
	
}

 ?>