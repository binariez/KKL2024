<?php

function insertTemplate($bln, $kat, $field, $ha, $w1a, $w1b, $w1c, $w2a, $w2b, $w2c, $w3a, $w3b, $w3c, $w4a, $w4b, $w4c)
{
    $arr = array(
        "bln"   => $bln,
        "kat"   => $kat,
        "field" => $field,
        "ha"    => $ha,
        "w1"    => [
            "w1a"   => $w1a,
            "w1b"   => $w1b,
            "w1c"   => $w1c,
        ],
        "w2"    => [
            "w2a"   => $w2a,
            "w2b"   => $w2b,
            "w2c"   => $w2c,
        ],
        "w3"  =>   [
            "w3a"   => $w3a,
            "w3b"   => $w3b,
            "w3c"   => $w3c,
        ],
        "w4"  => [
            "w4a"   => $w4a,
            "w4b"   => $w4b,
            "w4c"   => $w4c,
        ],
    );
    return $arr;
}
