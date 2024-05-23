<?php
    class Rettangolo{
        private $width;
        private $lenght;
        public function __construct($width, $lenght)
        {
            $this->width = $width;
            $this->lenght = $lenght;
        }
        public function getWidth(){
            return $this->width;
        }
        public function getlenght(){
            return $this->lenght;
        }
        public function setWidth($width){
            return $this->width = $width;
        } 
        public function setLenght($lenght){
            return $this->lenght = $lenght;
        }
        public function calcArea(){
            return $this->lenght * $this->width;
        }
        public function __toString() {
            return "Rettangolo: larghezza = $this->width, altezza = $this->lenght, area = " . $this->calcArea();
        }

    };

    $area = new Rettangolo(50,10);
    echo $area;

    