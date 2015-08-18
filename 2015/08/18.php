<?php
//magic methods

class Person
{
    private $prop = array();
    private $name;
    private $age;
    
    public function __set($key, $value)
    {
        $this->prop[$key] = $value;
    }
    
    public function __get($key)
    {
        return array_key_exists($key, $this->prop) ? $this->prop[$key] :null;
    }
}

$p = new Person();
$p->name = 'hello world';
$p->age = 20;

var_dump($p->name, $p->age);