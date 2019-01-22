<?php
class bankAccount{
    public $accountname;
    private $totalbalance;
    
    function __construct($acc_name,$balance){
        $this->accountname ='$acc_name';
        $this->totalbalance='$balance';

        echo 'Hello Mook';
    }

    
}
$x = new bankAccount('Kannika',20000);
//$x->hello();


?>