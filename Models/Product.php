<?php
require_once __DIR__.'/Category.php';
require_once __DIR__.'/../Traits/Shippable.php';
class Product
{
    use Shippable;
    protected $name;
    protected $price;
    protected $image = "../Assets/img/no-image.png";
    protected $category;

    public function set_name($_name)
    {
        if (strlen($_name) < 25) {
            $this->name = $_name;
        }
    }

    public function set_price($_price)
    {
        if ($_price > 0) {
            $this->price = $_price;
        }
    }

    public function set_image($_image)
    {
        if (is_file($_image)) {
            $this->image = $_image;
        }
    }

    public function set_category($_category)
    {
        $this->category = $_category;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_price(){
        return number_format($this->price,2);
    }
    public function get_image(){
        return $this->image;
    }
    public function get_category() {
        return $this->category;
    }

    
}
