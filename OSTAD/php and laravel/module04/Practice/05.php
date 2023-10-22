<?php

class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {

        $this->color = ltrim($colorCode, '#');
        $this->parseColor();

    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
        $this->readRGBColor();
    }

    public function readRGBColor()
    {
        echo "Red = {$this->red} \nGreen = {$this->green}\nBlue = $this->blue";
    }

//    public function getGreen()
//    {
//        return $this->green;
//    }
//
//    public function getRed()
//    {
//        return $this->red;
//    }
//
//    public function getBlue()
//    {
//        return $this->blue;
//    }

    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');

        } else {
            list($this->red, $this->green, $this->blue) = [0, 0, 0];
        }

    }
}

$myColor = new RGB('#ffff00');
$myColor->readRGBColor();
