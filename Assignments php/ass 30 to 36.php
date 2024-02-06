<?php

    // Assignments 1

    $a = 100;
    $b = 200;
    $c = 100;

    if ($b > $a) {
        if($a = $c) {
            if($a + $c = $b) {
                echo "Yes";
            }
        }
    }
    echo "<br>";

    // Assignments 2

    // Test Case 1
    $a = 100;
    $b = 200;
    $c = 300;
    if ($a > $b) {
        echo "A Is Larger Than B";
    } elseif ($a > $c) {
        echo "A Is Larger Than C";
    } else {
        echo "A Is Not Larger Than B Or C";
    }
    echo "<br>";
    // A Is Not Larger Than B Or C

    // Test Case 2
    $a = 200;
    $b = 100;
    $c = 300;
    if ($a > $b) {
        echo "A Is Larger Than B";
    } elseif ($a > $c) {
        echo "A Is Larger Than C";
    } else {
        echo "A Is Not Larger Than B Or C";
    }
    echo "<br>";
    // A Is Larger Than B

    // Test Case 3
    $a = 200;
    $b = 200;
    $c = 100;
    if ($a > $b) {
        echo "A Is Larger Than B";
    } elseif ($a > $c) {
        echo "A Is Larger Than C";
    } else {
        echo "A Is Not Larger Than B Or C";
    }
    echo "<br>";
    // A Is Larger Than c

    // Assignments 3

    $admins = ["Osama", "Ahmed", "Sayed"];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "The Request Method Is Post And Username Is " . $_POST['user'];
        echo "<br>";
        if ($_POST['user'] == "Osama") {
            echo "This Username ". $_POST['user'] . " Is Admin";
        } elseif ($_POST['user'] == "Ahmed") {
            echo "This Username ". $_POST['user'] . " Is Admin";
        } elseif ($_POST['user'] == "Sayed") {
            echo "This Username ". $_POST['user'] . " Is Admin";
        }
    }
    echo "<br>";

    


?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="user">
            <input type="submit" value="Send">
        </form>
    </body>
</html>