    <!-- <?php 
    $title = 'String Functions In Php';
    $name = $_GET['name'];
    ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <p>
    <form action="01-string-function.php" method="get">
        <input type="text" name="name" placeholder="Harry Is Good Boy"  id="" required>
        <input type="submit" value="submit">
    </form>
    </p>

    our code is 
    <pre>
#1 strlen [ give length of characters. ]
echo strlen($name).'<br> it start with 1 and also count whitespaces';

#2 str_word_count [ For counting words]
echo str_word_count($name);

#3 strrev [ Revers a string ]
echo strrev($name);

#4 strpos {Search postion for is}
echo strpos($name, 'is'); // in $name is are 6 number when count. *count with 0

#5 str_replace {Replacing Harry With Kaushal}
echo str_replace('Harry' , 'Kaushal', $name);

#6 str_repeat {For Repeat string}
echo str_repeat($name, 4);



#7.1 rtrim {remove right side white space}
echo '< pre>' . rtrim('     Kaushal Is Good Boy Really     ') . '</ pre>';

#7.2 ltrim {remove left side white space}
echo '< pre>' . ltrim('     Kaushal Is Good Boy Really     ') . '</ pre>';

#7.3 trim {remove both side white space}
echo '< pre>' . trim('     Kaushal Is Good Boy Really     ') . '</ pre>';
    </pre>
    <br>
<?php
/*
    Strings Function In Php file {12-2-2020}
    Php have many types of string, few strings are hear for gatting idea what actully it is.
*/

 // for all string we use this variable as comon

echo '<pre>Our $name is <b>'.$name .'</b></pre>';


#1 strlen [ give length of characters. ]
echo '<h3>1. strlen(); {give length of characters}</h3>';
echo strlen($name).'<br> it start with 1 and also count whitespaces';

#2 str_word_count [ For counting words]
echo '<h3>2. str_word_count(); {For counting words}</h3>';
echo str_word_count($name);

#3 strrev [ Revers a string ]
echo '<h3>3. strrev(); {Revers a string}</h3>';
echo strrev($name);

#4 strpos {Search postion for is}
echo '<h3>4. strpos {Search postion for is}</h3>';
echo strpos($name, 'is'); // in $name is are 6 number when count. *count with 0

#5 str_replace {Replacing Harry With Kaushal}
echo '<h3>5 str_replace {Replacing Harry With Kaushal}</h3>';
echo str_replace('Harry', 'Kaushal', $name);

#6 str_repeat {For Repeat string}
echo '<h3>6 str_repeat {For Repeat a string}</h3>';
echo str_repeat($name, 4);

#7.1 rtrim {remove right side white space}
echo '<h3>7.1 rtrim {remove right side white space}</h3>';
echo '<pre>' . rtrim('     Kaushal Is Good Boy Really    ') . '</pre>';

#7.2 ltrim {remove left side white space}
echo '<h3>7.2 ltrim {remove left side white space}</h3>';
echo '<pre>' . ltrim('     Kaushal Is Good Boy Really     ') . '</pre>';

#7.3 trim {remove both side white space}
echo '<h3>7.3 ltrim {remove both side white space}</h3>';
echo '<pre>' . trim('     Kaushal Is Good Boy Really     ') . '</pre>';


?>
<br>
<br>

</body>
</html>

<style>
b {
    background-color: yellow;
    color: red;
}
pre {
    font-family: serif;
    background-color: yellowgreen;
    padding:10px 0px 10px 10px; 
    /* top, right , bottom , left */
    border-radius: 12px;
}
h3 {
    font-family: cursive;
}
</style>