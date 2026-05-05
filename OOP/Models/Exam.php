<?php

require_once "Model.php";

class Exam extends Model
{
    // Constructor Property Promotion (PHP 8.0+)
    public function __construct(
        public $topic,
        public $info,
        public $completed = false
    )
    {
    }
}