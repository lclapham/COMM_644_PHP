<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <P>The following code was created by PHP</P>

    <?php
    // This is a comment
    /* This is a 
multiline comment */
    print "<strong class=\"bold\">Hellow \n  There!</strong>";

    ?>
    <pre>
<?php
print_r($_SERVER);
// Variables can be only $_ or $and some letter
$firstName = "Lamar ";
$year = " 2020";

echo $firstName;
echo $year;


/* Numbers:
    Number      Type
    1           Integer
    1.0         Floating-point
    -1          Integer
    -1.0        Floating-point

    Invalid:

    1/4         Contains a slash
    2018a       Contains a letter
    08.02.06    Contains multiple decimals

    Strings:
    "Hellow There!"
    'Hello There!'
    "Hello, $firstName!"

    '' literal (variable's value WILL NOT BE assigned)
    "" extrapolated (variable's value will be assigned)

    \r, return
    \t, tab
    \n, New line

    This works
    $num = 3;
    print $num;
?>
    </pre>

</body>

</html>