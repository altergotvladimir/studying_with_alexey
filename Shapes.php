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
    public string $color;
    public int $radius;
    public function areaCalculation()
    {
        $this->area = pi()*$this->radius**2;
        return $this->area . "\n";
    }
}

class Square extends Shape
{
    public string $color;
    public int $side;
    public function areaCalculation()
    {
        $this->area = $this->side**2;
        return $this->area . "\n";
    }
}

$square = new Square();
$square->color = 'green';
$square->side = 9;
echo $square->color . "\n";
echo $square->areaCalculation();

$circle = new Circle();
$circle->color = 'blue';
$circle->radius = 5;
echo $circle->color . "\n";
echo $circle->areaCalculation();
