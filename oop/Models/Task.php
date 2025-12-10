<?php

require 'Model.php';

class Task extends Model
{
  public $color = 'black';

  // Constructor Property Promotion
  public function __construct(
    public $title, 
    public $completed = false
  )
  {
  }

  public function complete()
  {
    $this->completed = true;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }
}