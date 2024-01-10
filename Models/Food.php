<?php
require_once __DIR__.'\Product.php';
class Food extends Product
{
    private $expiration;

    public function set_expiration($_expiration)
    {
        if (date("Y/m/d") < $_expiration) {
            $this->expiration = $_expiration;
        }
    }

    public function get_expiration(){
        return $this->expiration;
    }
}
