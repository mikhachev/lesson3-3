<?php 
namespace order;

class order extends \basket\basket{
	
public function showBasket(){ //список продуктов и количество в корзине
        $total = 0;
        
        foreach($this->yourBasket as $key => $value){
        	$unic_property = "";
        	if (isset($value->size)){
				$unic_property = 'размер '.$value->size;
			}elseif (isset($value->mass)){
			    $unic_property = 'вес '.$value->mass;
			}elseif (isset($value->volume)){
			    $unic_property = 'литров '.$value->volume;
			}
            echo 'Товар ' . $value->name . " $unic_property " .', количество: ' . $value->amount . '<br>';
            
            $total = $total + $value->amount; 
                       
        }
        echo '<br>'; 
        echo 'Общее количество товаров: ' . $total;
               
        
    }


}




 ?>