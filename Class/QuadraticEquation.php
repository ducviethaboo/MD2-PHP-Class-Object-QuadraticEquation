<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($numberA, $numberB, $numberC)
    {
        $this->a = $numberA;
        $this->b = $numberB;
        $this->c = $numberC;
    }

    function getNumA()
    {
        return $this->a;
    }
    function getNumB()
    {
        return $this->b;
    }
    function getNumC()
    {
        return $this->c;
    }

    function getDiscriminant() {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
    function getRoot1() {
        return (- $this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }
    function getRoot2() {
        return (- $this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

}