<?php
namespace Maths;

require 'Functions.php';


    $obj = new Arithemetic();

    // calling functions

    echo 'Sum of two numbers : ' .$obj->add(3, 3)."<br>";

    echo 'Difference of two numbers : ' .$obj->subtract(2, 3)."<br>";

    echo 'Product of two numbers : ' .$obj->multiply(2, 4)."<br>";

    echo 'Sum of two numbers : ' .$obj->divide(2, 1).    "<br>";
