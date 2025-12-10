<?php

require 'Model.php';

class Exam extends Model
{
  // Constructor Property Promotion
  public function __construct(
    public $topic,
    public $info,
    public $completed = false
  )
  {
  }
}