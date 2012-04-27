<?php

namespace My\Math;

class Uklad2x2
{
    private $a;
    private $b;
    private $c;

    public function __construct($r1, $r2)
    {
        $this->a[0] = $r1[0];
        $this->a[1] = $r2[0];
        $this->b[0] = $r1[1];
        $this->b[1] = $r2[1];
        $this->c[0] = $r1[2];
        $this->c[1] = $r2[2];
    }

    public function det2($t)
    {
        return $t[0][0]*$t[1][1] - $t[0][1]*$t[1][0];
    }

}

