<!-- <?php // 03, Decemer 2020 .  By Kaushal Bhatol.
$title = 'switch case Homework';
$question = 'Creat an switch case using more then one case';
$condition = 'Driver drive car only if his age is 25 and if his age 65 he cannot drive<br>
            2. his age 18, he only able to drive motercycle <br>
            3. his age less than 18 he cant able to drive anything <br>
            4. his age more then 100 he gona die.';
$age = $_GET['age'];
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style type="text/css">
    .er {
        color: red;
    }
    </style>
</head>
<body>
    <p>
        <form action="02-Switch_case_statement_homeworck.php" method="get">
            <input type="number" name="age" placeholder="Enter Your age"  value="<?=$age?>"id=""autofocus>
            <input type="submit" value="submit">
        </form>

    </p>

    <h3> Our Question is "<?=$question?>" </h3>
    <p> Conditon Is "<?=$condition?>" </p>
    <p>My Answer
    <pre>
    switch($age){
        case 65 :
            echo 'Your age is 65 so you cannot able to drive a car '; //Q1 Ans
            return;
        case 25 :
            echo 'Your age is 25 so you can able to drive a car '; // Q1 Ans
            return;
        case 18 :
            echo 'Your age is 18 so you can drive motercycle only'; // Q2 Ans
            return;
        case($age < 18) :
            echo 'Your age is less then 18 so you cannot drive any vehicale'; // Q3 Ans
            return;
        case($age > 100) :
            echo 'Your about to die, Why You Want to Drive?'; // Q4 Ans
            return;
        default :
            echo 'Please enter valid age'; // By ME for give invalid entery
            return;
        }
    </pre>
    </p>
    <b>age is <?=$age;?></b>
    <p> Output : 
<?php
    switch($age){
        case 65 :
            echo 'Your age is 65 so you cannot able to drive a car ';
            return;
        case 25 :
            echo 'Your age is 25 so you can able to drive a car ';
            return;
        case 18 :
            echo 'Your age is 18 so you can drive motercycle only';
            return;
        case($age < 18) :
            echo 'Your age is less then 18 so you cannot drive any vehicale';
            return;
        case($age > 100) :
            echo 'Your about to die, Why You Want to Drive?';
            return;
        default :
            echo '<b class="er">Please enter valid age </b> ';
            return;
            
    }


?>
</p>
</body></html>
