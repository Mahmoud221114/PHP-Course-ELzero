<!-- // Assignments 1 -->

    <?php $username = "Mahmoud Courses"; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= <?php echo $username; ?>>
        <title>Welcome To <?php echo $username; ?></title>
    </head>
    <body>
        <h1><?php echo $username; ?></h1>
        <p>Here In <?php echo $username; ?> We Provide Front-End And Back-End Courses</p>
        <hr>
        <div><?php echo $username; ?> Is The What You Need.</div>
        <footer>All Right Reserved To <?php echo $username; ?></footer>
    </body>
    </html>

    <?php 

    // Assignments 2

    $name = "elzero";
    $$name = "Web";

    echo $$name;
    echo "<br>";
    echo $elzero;
    echo "<br>";
    echo "${$name}";
    echo "<br>";
    echo "{$elzero}";
    echo "<br>";
    echo "$elzero";
    echo "<br>";

    // Assignments 3

    $a = 200;
    $b = &$a;
    $a = 100;

    echo $b; // 100
    echo "<br>";

    // Assignments 4

    echo '<br>';
    echo '<pre>';
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo $_SERVER["HTTP_HOST"];
    echo '<br>';
    echo $_SERVER["SystemRoot"];
    echo '<br>';
    echo $_SERVER["OPENSSL_CONF"];

    echo '</pre>';
    echo '<br>';
    //  "C:/xampp/htdocs"
    // "localhost"
    // "C:\WINDOWS"
    // "C:/xampp/apache/bin/openssl.cnf"

    // Assignments 5
    /*
    1 => PHP_VERSION 
    2 => PHP_MINOR_VERSION  
    3 => PHP_VERSION_ID   
    4 => PHP_ZTS    
    5 => PHP_DEBUG     
    6 => PHP_OS      
    7 => PHP_OS_FAMILY       
    8 => PHP_EOL        
    9 => PHP_INT_MAX         
    10 => PHP_INT_SIZE          
    */

    // Assignments 6

    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';



