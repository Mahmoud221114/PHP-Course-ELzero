<?php

  // Assignments 1
  // echo rand(10, 20) . "<br>";
  // echo rand(10, 20) . "<br>";
  // echo rand(10, 20) . "<br>";
  // echo rand(10, 20) . "<br>";
  // Example
  // 13
  // 14
  // 19
  // 12

  // Assignments 2

  // $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
  // echo $friends[array_rand($friends)] . "<br>";
  // echo $friends[array_rand($friends)];
  // Example
  // Ibrahim
  // Ahmed

  // Assignments 3

  // $num1 = 11.5; // 11
  // $num2 = 9.4898; // 9.5
  // $num3 = -7.5; // -7
  // echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>" ;
  // echo round($num2, 1) . "<br>" ;
  // echo round($num3, 0, PHP_ROUND_HALF_ODD) . "<br>" ;

  // Assignments 4

  // echo "<pre>";
  // print_r(array_flip(array_map('filter_id', array_combine(filter_list(), filter_list()))));
  // echo "</pre>";

  // Assignments 6

  $url1 = "http://www.elz ero.org";
  $url2 = "http://¥elzero.org";
  $url3 = "https://elzero.org";
  $url4 = "https://elzero.o¥rg";
  echo filter_var($url1, FILTER_SANITIZE_URL) . "<br>";
  echo filter_var($url2, FILTER_SANITIZE_URL) . "<br>";
  echo filter_var($url3, FILTER_SANITIZE_URL) . "<br>";
  echo filter_var($url4, FILTER_SANITIZE_URL) . "<br>";
  // Output
  // http://www.elzero.org
  // http://elzero.org
  // https://elzero.org
  // https://elzero.org

