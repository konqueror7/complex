<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$a = New Complex(5, 3);
$b = New Complex(10, 6);

echo '/****  ADDITION  *****/';
$addition = New Complex();
$addition = $addition->add($a, $b);
echo $addition->main();

echo '/****  SUBTRACTION  *****/';
$subtraction = New Complex();
$subtraction = $subtraction->sub($a, $b);
echo $subtraction->main();

echo '/****  MULTIPLICATION  *****/';
$multiplication = New Complex();
$multiplication = $multiplication->mult($a, $b);
echo $multiplication->main();

echo '/****  DIVISION  *****/';
$division = New Complex();
$division = $division->div($a, $b);
echo $division->main();
