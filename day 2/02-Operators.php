<!-- <?php $title = 'operators'; #02, December-2020
$m = true;
$n = false;
$a = $_GET['a'];
$b = $_GET['b'];  
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
    input[type="number"] {
        width:50px;
    }
    i {
        background-color: yellow;
    }
</style>
</head>
<body>
    <div>
        <p>
            <form action="02-Operators.php" method="get">
                $a =<input type="number" name="a" id="" placeholder="a Value" value="<?=$a?>" autofocus required>
                $b =<input type="number" name="b" id="" placeholder="b Value" value="<?=$b?>" required>
                <input type="submit" value="Submit">
            </form>
        </p>
    </div>
    <!-- <?php

    ?> -->
<?php

/*   Operators in php 

    type of Operators.

    1. arithematic operator
    2. assignment operator
    3. comparison operator
    4. Logical operator
*/

echo '<p><i> Our a value is '.($a).' and b value is '. ($b) . '</i></p>' .
#1 arithematic operator
'<h3>1. arithematic operator </h3> '.
'<p>for a+b, the result is '. ($a + $b).'</p>'.
'<p>for a-b, the result is '. ($a - $b).'</p>'.
'<p>for a*b, the result is '. ($a * $b).'</p>'.
'<p>for a/b, the result is '. ($a / $b).'</p>'.
'<p>for a%b, the result is '. ($a % $b).'</p>'.
'<p>for a**b, the result is '. ($a ** $b).'</p>'.

#2 assignment operator
'<h3>2. assignment operator </h3> - For assigning One value to other value. <br>';
$x = $a;    echo ' $x=$a . for x, the value is '.$x; 
$a += 3;    echo '<p> a += 3 , is ' .$a. '</p>';
$a -= 3;    echo '<p> a -= 3 , is ' .$a. '</p>';
$a *= 3;    echo '<p> a *= 3 , is ' .$a. '</p>';
$a /= 3;    echo '<p> a /= 3 , is ' .$a. '</p>';
$a %= 3;    echo '<p> a %= 3 , is ' .$a. '</p>';

#3 comparison operator
echo '<h3>3. comparison operator</h3>'.
'for a==b, the result is '. ($a == $b) . '<b> false not giving any value </b>' . '<br>' .
'for a==a, the result is '. ($a == $a) . '<br>' .
'for a>b, the result is '. ($a > $b) . '<br>' .
'for a<b, the result is '. ($a < $b) . '<br>' .
'for a<>b, the result is '. ($a <> $b) . '<br>' . '<> means not equal to' .
'for a<=b, the result is '. ($a <= $b) . '<br>' . 
'for a>=b, the result is '. ($a >= $b) . '<br>' ;

#4 Logical operator
echo '<h3>4. Logical operator</h3>';

echo '<i>Our $m is true and $n is false</i> <br> ' . '<br>' .
'for m and n , result is ' . ($m and $n) . '<br>' .
'for m && n , result is ' . ($m && $n) . '<i> This && sign also used for and </i>' . '<br>' .'<br>' .
'for m or n , result is ' . ($m or $n) . '<br>' .
'for m || n , result is ' . ($m || $n) . '<i> This || is used for or </i>' . '<br>' . '<br>' .
'for not m = !m , result is ' . (!$m) . '<br>' .
'for not n = !n , result is ' . (!$n) . '<i> This ! used for not, means oposit value of string.</i> <br> <br>' .

'<h4>Note: All Operaters are only used for boolen values.</h4>';
?>

        <!-- CODE AREA  -->

<h2>Our Code Is</h2> 
<pre>
#1 arithematic operator
'For a+b, the result is '. ($a + $b) .
'For a-b, the result is '. ($a - $b) .
'For a*b, the result is '. ($a * $b) .
'For a/b, the result is '. ($a / $b) .
'For a%b, the result is '. ($a % $b) .
'For a**b, the result is '. ($a ** $b) .

#2 assignment operator
$x = $a;    echo ' $x=$a . for x, the value is '.$x; 
$a += 3;    echo 'a += 3 , is ' .$a;
$a -= 3;    echo 'a -= 3 , is ' .$a;
$a *= 3;    echo 'a *= 3 , is ' .$a;
$a /= 3;    echo 'a /= 3 , is ' .$a;
$a %= 3;    echo 'a %= 3 , is ' .$a;

#3 comparison operator
'for a==b, the result is '. ($a == $b) . 'false not giving any value'.
'for a==a, the result is '. ($a == $a) .
'for a>b, the result is '. ($a > $b) .
'for a< b, the result is '. ($a < $b) .
'for a<>b, the result is '. ($a <> $b) . '<> means not equal to' .
'for a<=b, the result is '. ($a <= $b) . 
'for a>=b, the result is '. ($a >= $b) ;

#4 Logical operator
echo 'Our $m is true and $n is false ' .
'for m and n , result is ' . ($m and $n) .
'for m && n , result is ' . ($m && $n) . ' This && sign also used for and ' .
'for m or n , result is ' . ($m or $n) .
'for m || n , result is ' . ($m || $n) . 'This || is used for or ' .
'for not m = !m , result is ' . (!$m) .
'for not n = !n , result is ' . (!$n) . ' This ! used for not, means oposit value of string.';
</pre>

</body>
</html>

