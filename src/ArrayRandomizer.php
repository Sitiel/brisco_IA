<?php

namespace BriscolaCLI;

use function shuffle;

class ArrayRandomizer
{
    public function randomize(array $array)
    {
        $shuffled = $array;
        shuffle($shuffled);
        return $shuffled;
    }

    public function pickRandom(){
        return rand(0,1);
    }
}