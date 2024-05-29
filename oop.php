<?php
    class Car {
        public $brand;
        public $color;

        public function __construct($brand, $color)
        {
            $this->brand = $brand;
            $this->color = $color;
        }
        
        public function display()
        {
            echo "Brand : $this->brand \n";
            echo "Color : $this->color \n";
            echo "\n";
        }
    }

    $car1 = new Car("Toyota", "Red");
    $car2 = new Car("Honda", "White");

    $car1->display();
    $car2->display();
?>