<?php

    include 'database.php';
    class product{
        
        public $id ;
        public $name ;
        public $price;
        public $sale_price;
        public $category;
        public $date;
        public $img;
        public $description;

        public function __constructpr($name,$price,$sale_price,$category,$date,$img,$description ) {
            $this->name=$name;
            $this->price=$price;
            $this->sale_price=$sale_price;
            $this->category=$category;
            $this->date=$date;
            $this->img=$img;
            $this->description=$description;
        }
    }

?>
