<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }


    /**
     * @test
     **/
    public function givenStringVaciarReturnEmptyList()
    {
        $this->assertEquals("", $this->calculator->listaDeLaCompra("vaciar"));
    }

    /**
     * @test
     **/
    public function givenAñadirNewElementReturnsListWithNewElement()
    {
        $this->assertEquals("pan x1", $this->calculator->listaDeLaCompra("añadir pan"));
    }


}
