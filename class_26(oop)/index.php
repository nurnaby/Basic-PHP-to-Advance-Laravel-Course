<?php
    class calculation{ //calla declaration
        public $a, $b, $c; // properties

        function sum(){ //method
            $this->c = $this->a + $this->b;
            return $this-> c;
        }
        function sub(){//method
            $this->c = $this->a - $this->b;
            return $this-> c;
        }
    }
    $object1 = new calculation();//object declaration
    $object1->a= 20;
    $object1->b= 10;
    echo $object1->sum().'<br>';
    $object2 =new calculation();// object declaration
    $object2->a= 20;
    $object2->b= 10;
    echo $object2->sub().'<br>';


    // constructor oop
    class empoyes{
        public $name = "sohag";
        public $salary = 30000;
        function __construct($n="none",$s=0){
            $this->name = $n;
            $this->salary =$s;
        }
        function info(){
            echo $this->name ."=".$this->salary;
        }
    }
    $object3 = new empoyes();
    $object3-> info();
?>