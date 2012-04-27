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

    public function w()
    {
        $this->w = $this->det2(array($a[0], $b[0]), array($a[1], $b[1]));
    }

    public function getW()
    {
        return $this->w;
    }

    public function wx()
    {
        $this->wx = - $this->det2(array($b[0], $c[0]), array($b[1], $c[1]));
    }

    public function getWx()
    {
        return $this->wx;
    }

    public function wy()
    {
        $this->wy =  $this->det2(array($a[0], $c[0]), array($a[1], $c[1]));
    }

    public function getWy()
    {
        return $this->wy;
    }

    public function solve()
    {
        $this->w();
        $this->wx();
        $this->wy();

        $this->x = $this->getWx() / $this->getW();
        $this->y = $this->getWy() / $this->getW();
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }


}

