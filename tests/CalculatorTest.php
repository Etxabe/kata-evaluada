<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     **/
    public function givenStringVaciarReturnEmptyList()
    {
        $calculator = new Calculator();

        $response = $calculator->listaDeLaCompra("vaciar");

        $this->assertEquals("", $response);
    }

    /**
     * @test
     **/
    public function givenAñadirNewElementReturnsListWithNewElement()
    {
        $calculator = new Calculator();

        $response = $calculator->listaDeLaCompra("añadir pan");

        $this->assertEquals("pan x1", $response);
    }


}
