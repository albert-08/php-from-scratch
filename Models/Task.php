<?php

require_once "Model.php";

class Task extends Model
{
    public $id;
    public $color = 'black';
    public $title = '';
    public $completed = false;

    // Constructor Property Promotion (PHP 8.0+)
    // public function __construct(
    //     public $title = '', 
    //     public $completed = false
    // )
    // {
    // }

    public function setColor($color)
    {
        $this->color = $color;
    }
}