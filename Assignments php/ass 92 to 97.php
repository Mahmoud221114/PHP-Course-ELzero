<?php

    // Assignments 1
    // date_default_timezone_set("Asia/Riyadh");
    // echo date_default_timezone_get() . "<br>";
    // $d = date_create();
    // echo date_format($d, "D, m M y - h:i:s A") . "<br>";
    // echo date_format($d, "l, m F Y - h:i:s A") . "<br>";
    // Output Needed
    // "Asia/Riyadh"
    // "Wed, 09 Nov 22 - 07:11:22 PM"
    // "Wednesday, 09 November 2022 - 07:11:22 PM"

    // Assignments 2
    // date_default_timezone_set("Africa/Cairo");
    // $date = "2005-10-02";
    // $d = date_create($date);
    // echo date_default_timezone_get() . "<br>";
    // date_add($d, date_interval_create_from_date_string("15 Hour 15 Minutes 15 Seconds"));
    // echo date_format($d, "Y, F, l dS H-i-s");
    // Output Needed
    // "Africa/Cairo"
    // "2005, October, Sunday '02nd' 15:15:15"

    // Assignments 3
    // $date = "1990-10-01";
    // date_default_timezone_set("Africa/Cairo");
    // $reg = date_create($date);
    // $now = date_create("now");

    // $diff = date_diff($reg, $now);
    // echo '<pre>';
    // print_r($diff);
    // echo '</pre>';
    // echo "From Epoch Time Till $date Is Approximately " . $diff->days . " Days <br>";
    // echo "From Epoch Time Till $date Is Approximately " . $diff->y . " Years <br>";
    // Output Needed
    // "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
    // "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

    // Assignments 5

    // With time() Function
    echo time() . "<br>"; // 1668020233

    // Output Needed With Other Ways
    // 1668020233
    // 1668020233
    // 1668020233

