<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings and Variables</title>
</head>

<body>
    <H1>Week 3 Stuff</H1>
    <?php
    $firstName = "Lamar";
    $lastName  = "Clapham";
    $birthYear = 1970;
    $nameOne = "$firstName $lastName";
    $nameTwo = $firstName . ' ' . $lastName . ' ' . $birthYear;  //This is an example of concatination periods
    echo "<h2>String Example: </h2>
        <p>Name #1 is $nameOne</p>
        <p>Name #2 is $nameTwo</p>
        <p>Name #2 is $nameTwo</p>";

    // String functions

    // This is called string blank
    $var1 = strlen('some text');
    echo "<h3>String Length</h3><p>$var1</p>";


    // String to lower
    $var2 = strtolower("HELLO WORLD");
    echo "<h3>String to Lower</h3><p>$var2</p>";

    // String to upper
    $var3 = strtoupper("hello world");
    echo "<h3>String to Upper</h3>
            <p>$var3</p>";

    // Capitalize first letter character
    $var4 = ucfirst("hello world");
    echo "<h3>Cap first character</h3>
            <p>$var4</p>";

    // Capitalize first letter character
    $var5 = ucwords("hello world");
    echo "<h3>Cap first charcter of each word</h3>
            <p>$var5</p>";

    //Working with Numbers
    echo "<h2>Working with Numbers</h2>";
    $num = 4.4e3;

    $num1 = 2;
    $num2 = 4;

    // echo $num;

    // echo $num1 + $num2;

    // The round function
    $num3 = 3.12456;
    echo round($num3, 2);

    // The number format function
    echo "<h3>Number format function</h3>";
    $num4 = 20987;

    echo number_format($num4, 2);

    // Ecommerce Example
    echo "<h3>Ecommerce Example</h3>";

    $quantity = 20;
    $price = 78.65;
    $taxRate = .08;

    $total = $quantity * $price;
    // $total = $total + ($total * $taxRate);
    $total += ($total * $taxRate);
    $total = number_format($total, 2);

    echo "<p>You are purchasing <strong>" . $quantity . "</strong>
    widget(s) at a cost of <strong>$" . $price . "</strong> each.
    With tax, the total comes to <strong>$" . $total . "</strong></p>";

    //Constants
    echo "<h3>Working with constants</h3>";

    define('NAME', 'value'); //example constant
    define('USERNAME', 'Lamar');
    define('PI', 3.14);
    echo "Hello, " . USERNAME;

    // Set the date
    define('TODAY', 'April 4, 2018');
    echo '<p>Today is ' . TODAY . '</p>';

    // Predefined constants
    echo '<p>This server is running version <strong>' . PHP_VERSION . '</strong> of PHP on the ' . PHP_OS . ' operating system </p>';

    ?>

</body>

</html>