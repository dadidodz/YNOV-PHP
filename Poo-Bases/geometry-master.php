<?php

abstract class AbstractGeometry {
    
    abstract public function area(): int|float;
    abstract public function perimeter(): int|float;
}

class Square extends AbstractGeometry {
    
    private int|float $width;

    public function __construct(int|float $width){
        $this->width = $width;
    }

    public function area(): int|float{
        $area = $this->width * $this->width;
        return $area;
    }

    public function perimeter(): int|float{
        $perimeter = $this->width * 4;
        return $perimeter;
    }
}

class Rectangle extends AbstractGeometry {
    
    private int|float $width;
    private int|float $height;

    public function __construct(int|float $width, int|float $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): int|float{
        $area = $this->width * $this->height;
        return $area;
    }

    public function perimeter(): int|float{
        $perimeter = $this->width * 2 + $this->height * 2;
        return $perimeter;
    }
}


class Triangle extends AbstractGeometry {

    private int|float $side1;
    private int|float $side2;
    private int|float $side3;
    
    public function __construct(int|float $side1, int|float $side2, int|float $side3){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function area(): int|float{
        $area = $this->perimeter() / 2;
        return sqrt($area * ($area - $this->side1) * ($area - $this->side2) * ($area - $this->side3));
    }

    public function perimeter(): int|float{
        $perimeter = $this->side1 + $this->side2 + $this->side3;
        return $perimeter;
    }
}





?>