<?php
namespace Grekov;

interface AllFigure {

    public function __toString();
}

abstract class Figure implements AllFigure {

    abstract function getSquare();
    abstract function getPerimeter();

    public function getRatio()
    {
        return ($this->getSquare() / $this->getPerimeter());
    }
}

class Triangle extends Figure {

    private $baseSideA;
    private $sideB;
    private $sideC;
    private $height;

    public function __construct($baseSideA, $sideB, $sideC, $height)
    {
        $this->baseSideA = $baseSideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;

        $this->height = $height;
    }

    public function getSquare()
    {
        return (($this->baseSideA * $this->height) * 0.5);
    }

    public function getPerimeter()
    {
        return ($this->baseSideA + $this->sideB + $this->sideC);
    }

    public function __toString()
    {
        $s = self::getSquare();
        $p = self::getPerimeter();
        $r = self::getRatio();

        // %-5.1f - в документации разбирался по спецификаторам;
        return sprintf("S:%-5.1f P:%-5d R:%.2f\n", $s, $p, $r);
    }
}

$triangle = new Triangle(7,3,4,3);
echo $triangle;

//echo "Периметр: " . $triangle->getPerimeter() . "\n";
//echo "Площадь: " . $triangle->getSquare() . "\n";
//echo "Отношение площади к периметру: " . $triangle->getRatio() . "\n";

class Rectangle extends Figure {

    private $sideA;
    private $sideB;

    public function __construct($sideA, $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    public function getSquare()
    {
        return ($this->sideA * $this->sideB);
    }

    public function getPerimeter()
    {
        return (($this->sideA * 2) + ($this->sideB * 2));
    }

    public function __toString()
    {
        $s = self::getSquare();
        $p = self::getPerimeter();
        $r = self::getRatio();

        return sprintf("S:%-5d P:%-5d R:%.2f\n", $s, $p, $r);
    }
}

$rectangle = new Rectangle(7, 4);
echo $rectangle;

//echo $rectangle->getSquare() . "\n";
//echo $rectangle->getPerimeter() . "\n";
//echo $rectangle->getRatio() . "\n";

class Square extends Figure {

    private $sideA;

    public function __construct($sideA)
    {
        $this->sideA = $sideA;
    }

    public function getSquare()
    {
        return ($this->sideA * $this->sideA);
    }

    public function getPerimeter()
    {
        return ($this->sideA * 4);
    }

    public function __toString()
    {
        $s = self::getSquare();
        $p = self::getPerimeter();
        $r = self::getRatio();

        return sprintf("S:%-5d P:%-5d R:%.2f\n", $s, $p, $r);
    }
}

$square = new Square(7);
echo $square;

//echo $square->getSquare() . "\n";
//echo $square->getPerimeter() . "\n";
//echo $square->getRatio() . "\n";

