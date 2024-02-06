<?php

    // Assignments 1

    // $num_one = -1;
    // $num_two = 2.5;

    // $let_one = "o";
    // $let_two = "z";

    // $str = "El%er0";
    // $str[$num_one] = $let_one;
    // $str[$num_two] = $let_two;

    // // Write Your Code Here
    // echo $str;
    // echo '<br>';

    // Assignments 2

    // $str = "Orezle";
    // echo ucfirst(strrev(strtolower($str)));
    // // Elzero

    // Assignments 3

    // $str = 'aAa';
    // $num = 3;
    // $char = "_";

    // // Write Your Code Here
    // echo str_repeat(chunk_split(strtolower($str),$num, $char) ,$num) ;
    // // aaa_aaa_aaa_

    // Assignments 4
    // $str = "<div><b>Elzero</b></div>";
    // echo strip_tags($str, "<div></div>");
    // // <b>Elzero</b>

    // Assignments 5

    // $str = "Elzero Web School";
    // $e = "e";
    // $o = "O";
    // $four = 4;
    // var_dump(substr_count($str, $e, $four)); // 1
    // echo '<br>';
    // var_dump(substr_count(strtoupper($str), $o, ($four + $four))); // 2
    // // 1
    // // 2

    // Assignments 6
    // $chars = ["E", "l", "z", "e", "r", "o"];
    // echo implode("", $chars) . "<br>";
    // // Output
    // // "Elzero"

    // Assignments 7

    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    echo ucfirst(strtolower(implode(str_replace([1, 2], "", $chars))));
    // Output
    // "Elzero"
