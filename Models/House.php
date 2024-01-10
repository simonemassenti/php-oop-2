<?php
require_once __DIR__.'\Product.php';
class House extends Product
{
    private $type;

    public function set_type($_type)
    {
        $this->type = $_type;
    }

    public function get_type() {
        return $this->type;
    }
}
