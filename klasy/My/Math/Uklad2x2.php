<?php

namespace My\Math;

class Uklad2x2
{
    private $a;
    private $b;
    private $c;

    private $x;
    private $y;

    public function __construct($r1 = null, $r2 = null)
    {
        if (null !== $r1) {
            $this->a[0] = $r1[0];
            $this->b[0] = $r1[1];
            $this->c[0] = $r1[2];
        }

        if (null !== $r2) {
            $this->a[1] = $r2[0];
            $this->b[1] = $r2[1];
            $this->c[1] = $r2[2];
        }
    }

    public function det2($t)
    {
        return $t[0][0]*$t[1][1] - $t[0][1]*$t[1][0];
    }

    public function wx()
    {
        $this->wx = $this->det2(array($a[0], $b[0]), array($a[1], $b[1]));
        return $this->wx;
    }

}

