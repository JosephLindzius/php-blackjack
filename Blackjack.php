<?php


class Blackjack
{

    private $card;


    public function Hit () {
        $card = rand(0,11);
        return $card;
    }

    public function Stand () {

    }

    public function Surrender () {

    }
}