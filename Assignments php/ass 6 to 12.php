<?php

    // Assignments 1
    echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5); // 50
    echo "<br>";
    echo gettype((int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5)); // Integer
    echo "<br>";

    // Assignments 2

    // Method One
    echo gettype(100);
    echo "<br>";
    // Method Two
    echo var_dump(100);
    echo "<br>";
    // Method Three => Optional

    // Assignments 3

    echo "Hello \"Elzero\" \\\\ \"\"\" We love \"$\$PHP";
    echo "<br>";
    // Needed Output
    // Hello "Elzero" \\ """ We Love "$$PHP"

    // Assignments 4

    echo nl2br("We \n Love \n Elzero \n Web \n School");
    echo "<br>";

    // Needed Output
    // We
    // Love
    // Elzero
    // Web
    // School

    // Assignments 5

    // Needed Output
    // Hello "'Elzero'"
    // We Love $Programming$
    // Languages Specially "PHP"

    echo nl2br(<<< 'Now'
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
    Now);
    echo "<br>";

    // Assignments 6

    $something = "Programming";

    echo <<<code
    Hello \PHP\
    We Love $something
    code;
    echo "<br>";

    // [1] Fix The Error
    // [2] Remove 2 Characters To Get The Output

    // Needed Output
    // Hello \PHP\ We Love Programming

    // Assignments 7

    echo (int) "Hello PHP" + 1;
    echo '<br>';
    echo gettype((int) "Hello PHP" + 1);
    echo '<br>';

    // Needed Output
    // 1
    // integer

    // Assignments 8
    echo "<pre>";
    print_r([
        "FrontEnd" => [
        "HTML",
        "CSS",
        "JS" => [
            "Vuejs" => [
            "2" => "v2",
            "v3"
            ],
            "Reactjs",
            "Svelte"
        ]
        ],
        "BackEnd" => [
            "PHP",
            "MySQL",
            "Security"
        ],
        "Git",
        "Github",
        "Testing" =>[
            "Unit Testing",
            "End to End",
            "Integration"
        ]
    ]);
    echo "</pre>";


  //   Array
  // (
  //   [FrontEnd] => Array
  //     (
  //       [0] => HTML
  //       [1] => CSS
  //       [JS] => Array
  //         (
  //           [Vuejs] => Array
  //             (
  //               [2] => v2
  //               [3] => v3
  //             )

  //           [0] => Reactjs
  //           [1] => Svelte
  //         )
  //     )

  //   [BackEnd] => Array
  //     (
  //       [0] => PHP
  //       [1] => MySQL
  //       [2] => Security
  //     )

  //   [0] => Git
  //   [1] => Github
  //   [Testing] => Array
  //     (
  //       [0] => Unit Testing
  //       [1] => End To End
  //       [2] => Integration
  //     )
  // )


