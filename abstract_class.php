<?php
    abstract class Pet{
        abstract protected function hello();

        public function introduce(){
            echo "I'm your pet!";
        }
    } 

    class Dog extends Pet {
        public function hello(){
            echo 'Woof! woof!';

        }
    }
    class Cat extends Pet {
        public function hello(){
            echo 'Meow-';
        }
    }

    $x = new Dog();
    $x->hello();
    $x->introduce();

    $y = new Cat();
    $y->hello();
?>