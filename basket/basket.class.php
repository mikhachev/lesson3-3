<?php
namespace basket;
 
class basket{
    public $yourBasket = [];
   
    public function addToBasket($product, $amount = 1){                                      
          
        if(array_key_exists($product->name, $this->yourBasket))
        {
            $this->yourBasket[$product->name]->amount +=  $amount;
        }
        else{
            $this->yourBasket[$product->name] = $product;
            $this->yourBasket[$product->name]->amount = $amount; 
        }
    }
     
   
   public function deleteProduct($product){ //убрать 1 продукт
        if(array_key_exists($product->name, $this->yourBasket))
        {
            if($this->yourBasket[$product->name]->amount > 0)
            {
                $this->yourBasket[$product->name]->amount--;
            } 
        }
    }
 
    
    public function sum(){ 
        
        $total = 0;
                
        foreach($this->yourBasket as $key => $value){
            $total = $total + ($value->price * $value->amount);
        }
        
        return $total;
        
    }
}
 
