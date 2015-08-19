<?php
//magic methods

// class Person
// {
    // private $prop = array();
    // private $name;
    // private $age;
    
    // public function __set($key, $value)
    // {
        // $this->prop[$key] = $value;
    // }
    
    // public function __get($key)
    // {
        // return array_key_exists($key, $this->prop) ? $this->prop[$key] :null;
    // }
// }

// $p = new Person();
// $p->name = 'hello world';
// $p->age = 20;

// var_dump($p->name, $p->age);



// class Person
// {
    // protected $properties = array();
    
    // function __construct()
    // {
        // $this->properties['name'] = 'foo';
        // $this->properties['age'] = 20;
    // }
    
    // function __get($key)
    // {
        // return array_key_exists($key, $this->properties) ? $this->properties[$key] : null;
    // }
// }

// $p = new Person();
// var_dump($p->name, $p->age);

class Container
{
    private $data = array();
    
    public function get($key)
    {
        return array_key_exists($key, $this->data) ? $this->data[$key] : null;
    }
    
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }
}
$c = new Container();
$c->set('name', 'foo');
$c->set('age', 20);

class parentClass
{
    protected $container;
    
    function __construct($c)
    {
        $this->container = $c;
    }
    
    function __get($key)
    {
        return $this->container->get($key);
    }
}

class subClass extends parentClass
{
    
}

$sc = new subClass($c);
var_dump($sc->name, $sc->age);