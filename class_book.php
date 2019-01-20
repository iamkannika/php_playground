<?php
class Book{
    // public function Book($name){
    //     $this->name = $name;
    // }

    public $name; //$name is a property
    public $price ;
    public $discount;

    public function __construct($name, $price){
        $this->name =$name; //$this->name is การเข้าถึง property
        $this->price = $price;
    }

    public function print(){ //ให้ print propertyที่ชื่อ name ออกมา
        echo $this->name;
    }

    public function get_discount_price($discount) {
        // $discount: 10 ------- ลด 10%
        // 450 =500-(500*10/100)
        $discounted_price = $this->price-($this->price*($discount/100));
        // echo $this->price;
        return $discounted_price;
       // $this->get_discount_price();

        
        // return $this->discount;
    }
}


$book = new Book('Harry Potter', 500.0);
$book->name;
 echo $book->name;
$x = $book->get_discount_price(10.0); //$y=$x->method(parameter);
 echo $x;

// $book2 = new Book('Conan');
// $book2->print(); // Conan

// echo $book->name;
//echo $book2->name;

?>