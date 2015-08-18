<?php
//abstract class

abstract class Living
{
    private $dna;
    
    public function eat($food){}
    
    abstract protected function live();
    
    abstract protected function communicate($tool); 
}

class Animals extends Living
{
    protected function live()
    {
        echo 'Search food ... ' . PHP_EOL;
    }
    
    public function communicate($tool, $cantalk=false)
    {
        echo 'Animals can\'t use' . $tool . ' and they ' . ($cantalk ? 'can' : 'can\'t') .' talk.'. PHP_EOL;
    }
}

class Human extends Living
{
    protected function live()
    {
        echo 'Work and make money ...' . PHP_EOL;
    }
    
    public function communicate($tool, $cantalk=true)
    {
        echo 'Human beings can use ' . $tool . ' and they ' . ($cantalk ? 'can' : 'can\'t') . ' talk.' . PHP_EOL;
    }
}

$animal = new Animals();
$animal->communicate('phone', false);
$human = new Human();
$human->communicate('phone', true);