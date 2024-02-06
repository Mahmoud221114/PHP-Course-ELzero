<?php

    // // Assignments 1

    // $index = 10;
    // for (; $index >= 1; $index--) {
    //     echo "$index <br>";
    // }
    // echo "###############";
    // echo "<br>";
    // // Needed Output
    // // 10
    // // 9
    // // 8
    // // 7
    // // 6
    // // 5
    // // 4
    // // 3
    // // 2
    // // 1

    // // Assignments 2

    // $index = 0;
    // // use While
    // while ($index <= 20) {
    //     echo "$index <br>";
    //     $index += 2;
    // }
    // echo "###############";
    // echo "<br>";
    // // use Do While
    // $index = 0;
    // do {

    //     echo "$index<br>";
    
    //     $index += 2;
    
    // } while ($index <= 20);
    // echo "###############";
    // echo "<br>";
    // // use For
    // $index = 0;
    // for (; $index <= 20; $index += 2) {
    //     echo "$index <br>";
    // }
    // echo "###############";
    // echo "<br>";
    // // Needed Output
    // // 2
    // // 4
    // // 6
    // // 8
    // // 10
    // // 12
    // // 14
    // // 16
    // // 18
    // // 20

    // // Assignments 3

    // // $num = 2;
    // // while ($num < 520) {
    // //     // Your Code Here
    // //     echo "$num <br>";
    // //     if ($num == 2) {
    // //         echo $num - 1 . " <br>";
    // //     }
    // //     $num *= 7;
    // // }

    // // // Needed Output
    // // // 1
    // // // 4
    // // // 10
    // // // 22
    // // // 46
    // // // 94
    // // // 190
    // // // 382

    // Assignments 4

    // $start = 10;
    // $end = 0;
    // $stop = 3;
    // for ($start; $start >= $end; $start--) {
    //     if ($start >= $start) {
    //         echo "0$start <br>";
    //     }
    //     if ($start == $stop) {
    //         break;
    //     }
        
    // }
    // Needed Output
    // 10
    // 09
    // 08
    // 07
    // 06
    // 05
    // 04
    // 03

    // Assignments 5

    // $start = 0;
    // $mix = [1, 2, 3, "A", "B", "C", 4];
    // for ($start; $start <= sizeof($mix); $start++) {
    //     if ($mix[$start] == 1) {
    //         continue;
    //     }
    //     if (gettype($mix[$i]) === gettype("")) {
    //         continue;
    //     }
    //     echo $mix[$start] . "<br>";
    // }

    // Output
    // 2
    // 3
    // 4

    // Assignments 6

    // $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
    // foreach ($money as $name => $pond) {
    //     echo "The Name Is $name And I Need $pond Pound From Him <br>";
    // }

    // Output
    // "The Name Is Ahmed And I Need 100 Pound From Him"
    // "The Name Is Sayed And I Need 150 Pound From Him"
    // "The Name Is Osama And I Need 100 Pound From Him"
    // "The Name Is Maher And I Need 250 Pound From Him"

    // Assignments 7

    $mix = [1, 2, "A", "B", "C", 3, 4];
    for ($i = 0; $i <= sizeof($mix); $i++) {
        if (gettype($mix[$i]) === gettype("")) {
            continue;
        }
        if (gettype($mix[$i]) === gettype("")) {
            echo $i . "djf";
        }
        echo $mix[$i] . "<br>";
    }

    // Output
    // 1
    // 2
    // 3
    // 4
    // "4 Numbers Printed"
    // "3 Letters Ignored"