<?php

namespace My\Math\Tests;

use My\Math\Uklad2x2;

require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Uklad2x2.php');

class Uklad2x2Test extends \PHPUnit_Framework_TestCase
{


    /**
     *
     * @dataProvider getTestDet2Data
     *
     */
    public function testDet2($m, $d)
    {
        $u = new Uklad2x2();
        $this->assertEquals($u->det2($m), $d);
    }

    public function getTestDet2Data()
    {
        return array(
            array(
                array(array(1, 0), array(0, 1)), 1
            ),
            array(
                array(array(1, 2), array(5, 3)), -7
            ),
            array(
                array(array(1/3, 1/10), array(100, 3)), -9
            ),
        );
    }

    /**
     *
     * @dataProvider getTestSolveData
     *
     */
    public function testSolve($rown1, $rown2, $x, $y)
    {
        $u = new Uklad2x2($rown1, $rown2);
        $u->solve();
        $this->assertEquals($u->getX(), $x);
        $this->assertEquals($u->getY(), $y);
    }

    public function getTestSolveData()
    {
        return array(
            array(
                array(1, 1, -5), array(1, -1, 3), 1, 4
            ),
        );
    }

}
