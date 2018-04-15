<?php
namespace product;
include 'functions.php';

trait ChangeDelivery
{
    public function getDelivery()
    {
        if ($this->mass < 10)
        {
            return $this->delivery;
        } else {
            return 250;
        }
    }
}


echo "<h4>Сегодня в продаже:</h4>";
$dress1 = new Dress("джинсы ", "32", 9000, "рваные на коленях "); 
/* ?>

 <form method="GET" action="order/add_product.php">
 
<input type="text" readonly value="<?php $dress1->showProduct()?>" size="120"> 
<input type="hidden"  name="prod" value= <?php 'dress1' ?>  > 
<input type="submit" value="+">

</form> ";
<?php*/
$dress2 = new Dress("футболка Nike ", "XL", 2000, "с зарядкой для смартфона");

$dress1->showProduct();
$dress2->showProduct();

$drink1 = new Drinks("Coca - Cola ", 2, 99, "обычная" );
$drink2 = new Drinks("молоко Чебурашкино  ", 1, 60, "от веселых коров");
$drink1->showProduct();
$drink2->showProduct();

$vegetable1 = new Vegetables("картофель ", 5, 200, "молодой, из Египта" );
$vegetable2 = new Vegetables("тыква", 15, 1100, "суп из тыквы становится модным");
$vegetable1->showProduct();
$vegetable2->showProduct();

echo "<h4>У вас в корзине:</h4>";
$order = new \order\order();

$order->addToBasket($dress1 , 2);
$order->addToBasket($dress1);
$order->deleteProduct($dress1);
$order->addToBasket($dress2); 
$order->addToBasket($drink1, 4); 
$order->addToBasket($drink1);
$order->addToBasket($drink2); 
 
$order->addToBasket($vegetable1); 
$order->addToBasket($vegetable2);

$order->showBasket();
 
echo '<br><br>';
 
echo 'На сумму: ' . $order->sum();








