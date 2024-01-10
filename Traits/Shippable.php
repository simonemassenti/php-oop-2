<?php

trait Shippable
{
    private $ship = false;

    public function set_ship($_ship)
    {
        $this->ship = $_ship;
    }

    public function get_ship()
    {
        if ($this->ship) {
            return "L'articlo è spedibile";
        } else {
            return "L'articolo non può essere spedito";
        }
    }
}
