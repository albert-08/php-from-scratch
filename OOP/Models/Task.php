<?php

require __DIR__ .'/../../funciones.php';

class Model 
{
    public function complete()
    {
        $this->completed = true;
    }

    public function buildString()
    {
        $me = new ReflectionClass($this);
        $properties = $me->getProperties();

        $string = "";
        foreach ($properties as $property) {
            $propertyName = $property->name;
            $propertyValue = $this->$propertyName;

            $string .= "{$propertyName}:" . (is_bool($propertyValue) ? var_export($propertyValue, true) : $propertyValue) . "\n";
        }

        return $string;
    }

    public function save($name = null)
    {
        if (is_null($name)) {
            $me = new ReflectionClass($this);
            $filename = $me->getName();
            $name = lcfirst($filename) . ".txt";
        }

        $file = fopen($name, 'w');
        fwrite($file, $this->buildString());
        fclose($file);
    }
}

class Task extends Model
{
    // Constructor Property Promotion (PHP 8.0+)
    public function __construct(
        public $title, 
        public $completed = false
    )
    {
    }    
}

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

$task = new Task("Ir al supermercado");
$task->save();

$exam = new Exam("Examen de PHP", "PHP 8", true);
$exam->save("exam-1.txt");