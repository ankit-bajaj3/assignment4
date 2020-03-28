 <?php

class Vending
{
   
    var $item = '';
    var $amountt = 0;
    var $price = 0;
    var $amountremaining = 0;
 
    function __construct($item, $amount, $price)
    {
        $this->item = $item;
        $this->amount = $amount;
        $this->price = $price;
    }
       
    function purchase()
    {
    $this->amountremaining = $this->amount - $this->price;
    if($this->amountremaining > 0)
        echo 'Enjoy your '.$this->item.' and here is your left over amount '.$this->amountremaining.' dollars
        </div>'; 
    else
        echo 'Enjoy your: '.$this->item.'
        </div>';
                   
    }
}

?>