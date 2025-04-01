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

    /**
     * @test
     **/
    public function givenAñadirElementoWithQuantityReturnsListWithNewElement()
    {
        $this->assertEquals("leche x3", $this->calculator->listaDeLaCompra("añadir leche 3"));
    }

    /**
     * @test
     **/
    public function givenAñadirTwoElementsReturnsCompleteList()
    {
        $this->assertEquals("leche x2", $this->calculator->listaDeLaCompra("añadir leche 2"));

        $this->assertEquals("leche x2\npan x1", $this->calculator->listaDeLaCompra("añadir pan"));
    }

    /**
     * @test
     **/
    public function givenVaciarAfterInsertingElementsReturnsEmptyList()
    {
        $this->assertEquals("leche x2", $this->calculator->listaDeLaCompra("añadir leche 2"));

        $this->assertEquals("", $this->calculator->listaDeLaCompra("vaciar"));
    }


}
