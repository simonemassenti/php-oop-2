<?php

class Category
{
    private $name;
    private $icon = 'assets/img/no-image.png';

    public function set_name($_name)
    {
        $this->name = $_name;
    }

    public function set_icon($_icon)
    {
        $this->icon = $_icon;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_icon()
    {
        return $this->icon;
    }
}
