<?php ## Objects getters\setters

class ShopProduct {
    private  $title;
    private  $producerMainName;
    private  $producerFirstName;
    private $discount=0;
    protected $price;

    const AVAILABLE = 5552;
    const OUT_OF_STOCK = 1;

    public function __construct($title,$firstName,$mainName,$price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName(){
        return $this->producerFirstName;
    }

    public function getProducerMainName(){
        return $this->producerMainName;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return ($this->price - $this->discount);
    }

    public function getProducer(){
        return "{$this->producerFirstName} "
            . "{$this->producerMainName}";
    }

    public function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

}

print ShopProduct::AVAILABLE;

?>