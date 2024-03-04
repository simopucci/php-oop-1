<?php 

class Production
{
    public $title;
    public $language;
    public $vote;

    function __construct($title, $language, $vote)
    {
        $this->title = $title;  
        $this->language = $language;    
        $this->vote = $vote;
    }
}

$avatar = new Production("Avatar", "english - EN", "8.5");
var_dump($avatar);

$titanic = new Production("Titanic", "english - EN", "8");
var_dump($titanic);