<?php

    // // Assignments 1

    // Write Function Content Here
    // function greeting($name, $oo = "NOn") {
    //     if($oo == "Male") {
    //         return "Hello Mr $name <br>";
    //     } elseif($oo == "Female") {
    //         return "Hello Ms $name <br>";
    //     } else {
    //         return "Hello $name";
    //     }
    // }
    // // Needed Output
    // echo greeting("Osama", "Male"); // Hello Mr Osama
    // echo greeting("Eman", "Female"); // Hello Miss Eman
    // echo greeting("Sameh"); // Hello Sameh

    // // Assignments 2

    // Write Function Content Here
    // function get_arguments(...$names) {
    //     $all = "";
    //     foreach($names as $name) {
    //         $all .= $name . " ";
    //     }
    //     echo $all;
    // }

    // // Needed Output
    // echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
    // echo get_arguments("I", "Love", "PHP"); // I Love PHP

    // Assignments 3

    // Write Function Content Here
    // function sum_all(...$numbers) {
    //     $result = 0;
    //     foreach ($numbers as $number) {
    //         if ($number == 5) {
    //             continue;
    //         } elseif ($number == 10) {
    //             $number = 20;
    //         }
    //         $result += $number;
    //     }
    //     echo $result;
    // }

    // // Needed Output
    // echo sum_all(10, 12, 5, 6, 6, 10); // 64
    // echo sum_all(5, 10, 5, 10); // 40

    // Assignments 4

    // Write Function Content Here
    // function multiply(...$numbers) {
    //     $result = 1;
    //     foreach ($numbers as $number) {
    //         if(is_int($number) != is_string("df")) {
    //             continue;
    //         }
    //         $result *= $number;
    //     }
    //     echo $result;
    // }
    // // Needed Output
    // echo multiply(10, 20); // 200
    // echo multiply("A", 10, 30); // 300
    // echo multiply(100.5, 10, "B"); // 1000


    // Assignments 4
    function check_status($a, $b, $c) {
        // Function Code Here
        foreach ($a as $num) {
            
        }

    }
    
    // Needed Output
    echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    // echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    // echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    // echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
