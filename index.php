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

    class Book{
        public $book;
        public $author;
        public $genre;
        public $published_year;
        public function __construct(string $libro,string $autore,string $genere, $anno_di_pubblicazione)
        {
            $this->book = $libro;
            $this->author = $autore;
            $this->genre = $genere;
            $this->published_year = $anno_di_pubblicazione; 
        }
        public function getBook(){
            return $this->book;
        }
        public function setBook($book){
            if(is_string($this->book)){
                return $this->book = $book;
            }else{
                throw new Exception("Error Book is not a string");
            }
        }
        public function getAuthor(){
            return $this->book;
        }
        public function setAuthor($author){
            if(is_string($this->author)){
                return $this->author = $author;
            }else{
                throw new Exception("Error Author is not a string");
                
            }
        }
        public function getGenre(){
            return $this->genre;
        }
        public function setGenre($genre){
            if(is_string($this->genre)){
                return $this->genre = $genre;
            }else{
                throw new Exception("Error Genre is not a string");
            }
        }
        public function getPublishedYear(){
            return $this->published_year;
        }
        public function setPublishedYear($year){
            return $this->published_year = $year;
        }
        public function getInfo(){
            return " il nome del libro è $this->book, di $this->author pubblicato il $this->published_year e fa parte del genere $this->genre";
        }
    };

    $book = new Book('Harry Potter', 'Jk Rowling','fantasy', 2014);
    echo $book->getInfo();