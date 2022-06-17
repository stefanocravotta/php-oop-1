<?php 

class Movie{
    public $title;
    public $language;
    private $description;

    public function __construct($_title, $_language , $_description){
        $this->title = $_title;
        $this->language = $_language;
        $this->setDescription($_description);
    }

    public function setDescription($_description){
        $this->description = $_description;
    }

    public function getDescription(){
       return $this->description;
    }
}