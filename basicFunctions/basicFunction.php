<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $phrase = 'Hey Jake Peralta!';
    // Convert string to all lower case.
    echo strtolower("<p>$phrase</p>");
    echo '<hr/>';
    // Convert string to all upper case.
    echo strtoupper("<p>$phrase</p>");
    echo '<hr/>';
    // str_replace generally takes 3 parameters.
    //  First parameter is which part to replace
    // Second parameter is what will replace the first parameter.
    // Third parameter is which string to replace
    echo str_replace("Jake", "Amy", $phrase);

    echo ('<hr/>');
    // Substr takes 3 parameters
    // First parameter is which string to split
    // Second parameter is start with which index
    // Third parameter is how many characters to split
    echo substr($phrase, 8, 8);

    ?>
</body>

</html>