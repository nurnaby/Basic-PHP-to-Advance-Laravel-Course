# Basic-PHP-to-Advance-Laravel-Course
Take your skills to a new level and join millions of users that have learned PHP and laravel
![alt](https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9rEj0XyCed8vWnBwHNX7jpjDc48WE3k-v5w&usqp=CAU)
## Class 4 Overview

<details>
<summary>Click Here </summary>

1. Operator: Increment (++) and Decrement (--)
- For Loop
- While loop
- Do while
- Foreach
</details>

## Class 5 Overview 
<details>
<summary>Click Here </summary>

1. Keyword: break, continue
2. Indexed array
3. Associative array
4. Multidimensional array
</details>

## Class 8  
<details>
<summary>Click Here </summary>

1. Create a function that will return children, teenagers, young people, old people from the age
2. Create a function that will return the area of a rectangle, square, triangle
3. GPA function for result publishing
4. Create an age calculator function
5. Create a BMI function for health
6. Create a currency converter function from taka to USD, CAD, POUND, EURO etc
</details>

## Class 24
<details>
<summary>Click Here </summary>

__Intorduction javascript and jquery__
1. What is JavaScript?
2. What is JQuery?

</details>

## Class 25(jquery)
<details>
<summary>Click Here </summary>

__Intorduction javascript and jquery__
- input data red key word---> val()
- button data red key word---> attr()

</details>

## Class 26(oop)
<details>
<summary>Click Here </summary>

__oop__
- class
- propertis
- method
- object
- constructor

`php `
```php

       
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

```

`php `
```php
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

```

</details>