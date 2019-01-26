<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

class MyBook extends Book{
    
    protected $price;
    function __construct($title,$author,$price) {
        Book::__construct($title,$author);
        $this->price = $price;
    }
    public function display(){
        echo"Title: {$this->title}";
        echo"Author: {$this->author}";
        echo"Price: {$this->price}";
    }
}
//Write MyBook class

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>