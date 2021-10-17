<?php
declare(strict_types=1);

namespace phpscf\crud\tests;

use phpscf\crud\calculator;
use PHPUnit\Framework\TestCase;

class calculatorTest extends TestCase
{
    /** 
    * @test 
    */
    public function siSuma()
    {
       $calc =  new calculator();
       $suma = $calc->sum(5,6);
       $this->assertSame(11,$suma);
    }
}