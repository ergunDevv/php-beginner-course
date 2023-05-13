<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- First create html form.  -->
    <!-- Don't forget to give name attribution to inputs because we will use for php to manipulate the data -->
    <!-- Also give method and action attributions to the form that's important too for php. -->
    <form action="getInput.php" method="GET">
        <p>Name : </p>
        <input type="text" name='name'>
        <p>Age : </p>
        <input type="number" name='age'>
        <hr />
        <input type="submit">
    </form>

    <?php
    // For manipulate the data php command is dollar sign underscore and name of method to use after that name of the input inside double quotes inside the square brackets
    echo 'Your name is :';
    echo $_GET['name'];
    echo 'Your age is :';
    echo $_GET['age'];
    ?>

</body>


</html>