<?php
Class Book{
    private $name;
    private $price;
    public function set_name($n){
        $this->name = $n;
    }
    public function set_price($x){
        $this->price = $x;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_price(){
        return $this->price;
    }
}

$book = new Book();
$book->set_name("Harry Potter");
$book->set_price(500);
echo $book->get_name();
echo $book->get_price();
?>