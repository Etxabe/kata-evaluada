<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     **/
    public function givenEmptyStringReturnListState()
    {
        $calculator = new Calculator();

        $response = $calculator->listaDeLaCompra();

        $this->assertEquals($response, "");
    }

}
