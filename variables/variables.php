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
    // To create variable, first write $ sign and then the name of the variable
    // After that php recognizes the variables type according to what you write
    // If you put something in quotes, php will recognize and store it as a string
    // same for every other data type.
    $nameOfTheCharacter = 'John';
    $ageOfTheCharacter = 31;
    // To use it in html after the variable is declared, use it with the same syntax as the variable definition
    echo "<p>There once was a man named $nameOfTheCharacter</p>";
    echo "<p>He was $ageOfTheCharacter years old.</p>";
    echo "<p>He really liked the name $nameOfTheCharacter</p>";
    echo "<p>But didn't like being $ageOfTheCharacter</p>";





    ?>

</body>

</html>