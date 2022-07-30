<?php
    class calculation{ //calla declaration
        public $a, $b, $c; // proparty

        function sum(){
            $this->c = $this->a + $this->b;
            return $this-> c;
        }
        function sub(){
            $this->c = $this->a - $this->b;
            return $this-> c;
        }
    }
    $object1 = new calculation();//object declaration
    $object1->a= 20;
    $object1->b= 10;
    echo $object1->sum().'<br>';
    $object2 =new calculation();
    $object2->a= 20;
    $object2->b= 10;
    echo $object2->sub().'<br>';





?>