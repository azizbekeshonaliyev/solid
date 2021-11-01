<?php
// Open/Close principle
// Open for modules ...
// Close to modification

interface ShapeInterface{
    public function area();
}

class Square implements ShapeInterface {
    public $size;

    /**
     * @param $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    public function area(): int
    {
        // TODO: Implement area() method.

        return $this->size ** 2;
    }
}

class Circle implements ShapeInterface{

    public $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    public function area()
    {
        // TODO: Implement area() method.

        return ( $this->radius ** 2 ) * pi();
    }
}

class AreaCalculator{
    public $shapes;

    /**
     * @param $shapes
     */
    public function __construct($shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum(){
        $sum = 0;
        /**
        foreach ($this->shapes as $shape)
            if ($shape instanceof Square){
                $sum += $shape->size ** 2;
            }elseif($shape instanceof Circle){
                $sum += ($shape->radius ** 2) * pi();
            }
        **/
        foreach ($this->shapes as $shape)
            $sum +=$shape->area();

        return $sum;
    }
}

$calc = new AreaCalculator([
    new Square(4),
    new Circle(3),
    new Square(5)
]);


echo $calc->sum();