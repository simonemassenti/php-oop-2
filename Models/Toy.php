<?php
require_once __DIR__.'\Product.php';
class Toy extends Product
{
    private $material;

    public function set_material($_material)
    {
        $this->material = $_material;
    }

    public function get_material() {
        return $this->material;
    }
}
