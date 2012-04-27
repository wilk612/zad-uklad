<?php

namespace My\Math;

class Uklad2x2
{
    public function det2($t)
    {
        return $t[0][0]*$t[1][1] - $t[0][1]*$t[1][0];
    }

}

