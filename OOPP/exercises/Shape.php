<?php

class Shape
{
    public $name;
    public $color;
    public $width;
    public $height;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function __toString()
    {
        return "Name: " . $this->name . " Color: " . $this->color;
    }

    public function getArea($shape)
    {
        switch ($shape) {
            case 'rectangle':
                return $this->width * $this->height;
                break;
            case 'circle':
                return 3.14 * $this->width * $this->width;
                break;
            case 'triangle':
                return $this->width * $this->height / 2;
                break;
            case 'square':
                return $this->width * $this->width;
                break;
            default:
                return "Invalid shape";
                break;
        }
    }

    public function getPerimeter($shape)
    {
        switch ($shape) {
            case 'rectangle':
                return 2 * ($this->width + $this->height);
                break;
            case 'circle':
                return 2 * 3.14 * $this->width;
                break;
            case 'triangle':
                return $this->width + $this->height + sqrt(pow($this->width, 2) + pow($this->height, 2));
                break;
            case 'square':
                return 4 * $this->width;
                break;
            default:
                return "Invalid shape";
                break;
        }
    }
}

$myRectangle = new Shape('rectangle', 'red');
$myCircle = new Shape('circle', 'blue');
$myTriangle = new Shape('triangle', 'green');
$mySquare = new Shape('square', 'yellow');

$myRectangle->width = 10;
$myRectangle->height = 20;

echo $myRectangle;
echo "<br>";
echo "Area: " . $myRectangle->getArea('rectangle');
echo "<br>";
echo "Perimeter: " . $myRectangle->getPerimeter('rectangle');
echo "<br>";



