<?php

include "shape.php";

    class Square extends Shape {
        public $width;
        public $height;

        function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
    }


?>