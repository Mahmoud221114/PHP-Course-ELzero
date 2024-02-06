<?php

    // Assignments 1

    // Replace ? With Arithmetic Operators
    echo 10 + 20 + 15 - 3 % 190 / 10 % 400; // 0
    echo "<br>";

    // Assignments 2

    $a = "10";
    echo +$a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";
    echo (int) $a;
    echo "<br>";
    echo gettype((int) $a);
    echo "<br>";
    echo -(-$a);
    echo "<br>";
    echo gettype(-$a);
    echo "<br>";

    // Needed Ouput
    // 10
    // "integer"
    // 10
    // "integer"
    // 10
    // "integer"

    // Assignments 3

    $a = 10;
    $b = 20;
    var_dump($a <=> $b);
    echo "<br>";
    // Needed Output
    // -1

    // Assignments 4

    $a = 10;
    $b = 20;
    $c = 15;

    var_dump($a < $b); // True
    var_dump($c > $a); // True
    var_dump($a <= $b); // True
    var_dump($a != $b); // True
    var_dump($a <> $c); // True
    var_dump($a !== $c); // True
    var_dump(gettype($a) === gettype($b)); // True
    var_dump(gettype($a) == gettype($b)); // True
    var_dump(gettype((float) $a) !== gettype($b)); // True
    echo "<br>";

    // Assignments 5

    $points = 10;

    // Write Your Code Here
    $points++;
    $points++;
    $points++;
    echo $points; // 13
    echo "<br>";
    // Write Your Code Here
    $points--;
    $points--;
    $points--;
    $points--;
    $points--;
    echo $points; // 8;
    echo "<br>";

    // Assignments 6

    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = "{$a} {$b} {$c}";

    // Method Two
    $d = "$a $b $c";

    // Method Three
    $d = $a . " " . $b . " " . $c;

    // Method Four
    $d = $a;
    $d .= $b;
    $d .= $c;

    echo $d; // Elzero Web School
    echo "<br>";

    // Assignments 7

    $a = 10;
    $b = 20;

    echo $a + ($b * ($a + $b)) + ($a * $a) * $a; // 10000
    echo "<br>";

    // Assignments 8

    // Code 1
    $a = @$b or die("Custom Error");

    // Code 2
    $f = @file("Not_A_File") or die("Custom Error");

    // Code 3
    (@include("Not_A_File")) or die("Custom Error");
