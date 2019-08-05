<?php
include 'Circle.php';
include 'Comparable.php';

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function compareTo($obj)
    {
        $circleOtherRadius = $obj->getRadius();
        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        } else if ($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}

$circleOne = new ComparableCircle(10,'circleOne');
$circleTwo = new ComparableCircle(15,'circleTwo');

var_dump($circleOne -> compareTo($circleTwo));