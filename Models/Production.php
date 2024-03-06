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