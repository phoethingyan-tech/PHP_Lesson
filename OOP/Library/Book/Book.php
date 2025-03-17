<?php

namespace Library\Book;

class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author =$author;
    }

    public function getDetails() {
        return "Book Title: ".$this->title.", Author: ".$this->author;
    }

    public function readBook() {
        return "Reading ".$this->title." by".$this->author;
    }
}