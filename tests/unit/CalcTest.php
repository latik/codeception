<?php

namespace tests\unit;

use App\Calc;
use Codeception\Test\Unit;

/**
 * @internal
 * @coversNothing
 */
class CalcTest extends Unit
{
    protected \UnitTester $tester;

    public function testAdd()
    {
        $calc = new Calc();

        $this->assertEquals(5, $calc->add(2, 3));
    }
}
