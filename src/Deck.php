<?php

namespace BriscolaCLI;

use function array_map;
use function array_shift;

class Deck
{
    private $cards = [];

    public function __construct(ArrayRandomizer $arrayRandomizer)
    {
        foreach (Card::getSuits() as $suit) {
            foreach (Card::getRanks() as $rank) {
                $this->cards[] = new Card($suit, $rank);
            }
        }

        $this->cards = $arrayRandomizer->randomize($this->cards);
    }

    public function getCardsLeftCount()
    {
        return count($this->cards);
    }

    public function draw($cardsCount = 1)
    {
        if ($cardsCount === 1) {
            return array_shift($this->cards);
        }

        $cards = [];

        for ($i = 0; $i < $cardsCount; $i++) {
            $cards[] = array_shift($this->cards);
        }

        return $cards;
    }
}