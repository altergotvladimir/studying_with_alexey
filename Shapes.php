<?php

/*
 * Создайте класс "Фигура", имеющий атрибуты "цвет" и "площадь".
 * Затем создайте подклассы "Круг" и "Квадрат", наследующие класс "Фигура".
 * Добавьте методы для вычисления площади для каждой из подклассов.
 * Создайте объекты "Круг" и "Квадрат" с определенными значениями цвета и радиуса/стороны.
 * Вычислите площади для каждой фигуры и выведите результат.
 */

class Shape
{
    public string $color;
    public int $area;
}

class Circle extends Shape
{
    public string $color = 'green';
    public int $radius = 5;
    public function areaCalculation($radius)
    {
        $this->area = pi()*$radius**2;
        echo $this->area . "\n";
    }
}

class Square extends Shape
{
    public string $color = 'blue';
    public int $side = 4;
    public function areaCalculation($side)
    {
        $this->area = $side**2;
        echo $this->area . "\n";
    }
}

$square = new Square();
echo $square->color . "\n";
$square->areaCalculation($square->side);

$circle = new Circle();
echo $circle->color . "\n";
$circle->areaCalculation($circle->radius);