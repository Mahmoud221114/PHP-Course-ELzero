<?php

  // Assignments 1

  // $friends = [
  //   "AG" => "Ahmed Gamal",
  //   "OM" => "Osama Mohamed",
  //   "MG" => "Mahmoud Gamal",
  //   "AS" => "Ahmed Samy",
  //   "FA" => "Farid Ahmed",
  //   "SM" => "Sayed Mohamed"
  // ];
  
  // echo '<pre>';
  // print_r(array_chunk($friends, 2, True));
  // echo '</pre>';

  // Output
  // Array
  // (
  //   [0] => Array
  //     (
  //       [ag] => Ahmed Gamal
  //       [om] => Osama Mohamed
  //     )
  //   [1] => Array
  //     (
  //       [mg] => Mahmoud Gamal
  //       [as] => Ahmed Samy
  //     )
  //   [2] => Array
  //     (
  //       [fa] => Farid Ahmed
  //       [sm] => Sayed Mohamed
  //     )
  // )

  // Assignments 2

  // $codes = ["H", "C", "J"];
  // $means = ["HTML", "CSS", "JavaScript"];
  // echo '<pre>';
  // print_r(array_combine($codes, $means));
  // echo '</pre>';
  // Output
  // Array
  // (
  //   [h] => HTML
  //   [c] => CSS
  //   [j] => JavaScript
  // )

  // Assignments 3

  // $friends = [
  //   "Ahmed Gamal" => "AG",
  //   "Osama Mohamed" => "OM",
  //   "Mahmoud Gamal" => "MG",
  //   "Ahmed Samy" => "AS"
  // ];
  // echo '<pre>';
  // print_r(array_reverse(array_flip($friends)));
  // echo '</pre>';
  // Output
  // Array
  // (
  //   [as] => Ahmed Samy
  //   [mg] => Mahmoud Gamal
  //   [om] => Osama Mohamed
  //   [ag] => Ahmed Gamal
  // )

  // Assignments 4

  // $nums = [10, 20, 30];
  // function add($carry, $item) {
  //   return $carry + $item;
  // }
  // echo array_reduce($nums, fn($n1, $n2) => $n1 + $n2) ;
  // echo array_reduce($nums, "add");
  // Output
  // 60
  // 60

  // Assignments 5
  // $nums = [5, 10, 20, 5, 30, 40];
  // function add($n1, $n2) {
  //   return $n1 + $n2;
  // };
  // echo array_reduce($nums, "add", -10);
  // Output
  // 100

  // Assignments 6

  // $chars = ["A", "B", "C", "D", "E"];
  // $char = "@@";
  // $zero = 0;
  // echo '<pre>';
  // print_r(array_pad($chars, 10, $char[$zero]));
  // echo '</pre>';
  // Output
  // Array
  // (
  //   [0] => A
  //   [1] => B
  //   [2] => C
  //   [3] => D
  //   [4] => E
  //   [5] => @
  //   [6] => @
  //   [7] => @
  //   [8] => @
  //   [9] => @
  // )

  // Assignments 7

  // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

  // // Write Line Here
  // next($names);
  // // Write Line Here
  // next($names);

  // echo current($names) . "<br>"; // "Sayed"

  // // Write Line Here
  // next($names);
  // next($names);

  // echo current($names) . "<br>"; // "Ali"

  // // Write Line Here
  // reset($names);

  // echo current($names) . "<br>"; // "Osama"

  // // Write Line Here
  // next($names);
  // next($names);
  // next($names);

  // echo current($names) . "<br>"; // "Mahmoud"

  // Assignments 8

  // $chars = ["A", "B", "C"];
  // // array_push($chars, "D");
  // // $chars[] = "D";
  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // // Output
  // Array
  // (
  //   [0] => A
  //   [1] => B
  //   [2] => C
  //   [3] => D
  // )

  // Assignments 9

  // $nums = [1, 2, 3, 4, 5, 6];
  // echo '<pre>';
  // print_r(array_slice($nums, -5, 3));
  // echo '</pre>';
  // Output
  // Array
  // (
  //   [0] => 2
  //   [1] => 3
  //   [2] => 4
  // )

  // Assignments 10

  // $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
  // $nums = [4, 5, 6];

  // // Write Your Code Here
  // echo '<pre>';
  // print_r(array_splice($mix, 3, 3, $nums));
  // print_r($mix);
  // echo '</pre>';

  // Output
  // Array
  // (
  //   [0] => 1
  //   [1] => 2
  //   [2] => 3
  //   [3] => 4
  //   [4] => 5
  //   [5] => 6
  //   [6] => 7
  //   [7] => 8
  //   [8] => 9
  // )

  // Assignments 11

  // $arr = ["A", "B", "C", "D", "E"];
  // echo count($arr);
  // Output
  // 5

  // Assignments 12

  // $nums = [11, 2, 10, 7, 20, 50];
  // echo array_sum($nums);
  // Output
  // 100

  // Assignments 13

  // $nums = [10, 100, -20, 50, 30];
  // echo array_sum($nums);
  // Output
  // 100