<!-- <?php // 03, Decemer 2020 .  By Kaushal Bhatol.
$title = 'If else Homework';
$question = 'Creat an if else using more then one elseif';
$condition = 'Driver drive car only if his age more or equal to 25 and less or equal to 65';
$age = $_GET['age'];
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
    <form action="01-if_else_homeworck.php" method="get">
        <input type="text" name="age" placeholder="Enter age Value"> <input type="submit" value="submit">
    </form>
    </p>

    <h3> Our Question is "<?=$question?>" </h3>
    <p> Conditon Is "<?=$condition?>" </p>
    <br>
     $age = <b><?=$age?></b> <br><br>
    
    <p> Our Code : </p>

    <pre>
    if($age > 100){
    echo 'Please Enter valid Age Value';
    }
    elseif($age >= 65){
    echo 'Your Age more or equal to 65 so You Cannot Drive Car';
    }
    elseif($age >= 25){
        echo 'Your age is more or equal to 25 and less than 65, So You Can Drive Car';
    }
    elseif($age >= 1){
        echo 'Your age is less then 25, so you cannot able to drive Car.';
    }
    else{
        echo 'Please Enter valid Age Value';
    }
    </pre>

    <p> Our Answer : </p> <b>

<?php
if($age > 100){
    echo 'Please Enter valid Age Value';
}
elseif($age >= 65){
    echo 'Your Age more or equal to 65 so You Cannot Drive Car';
}
elseif($age >= 25){
    echo 'Your age is more or equal to 25 and less than 65, So You Can Drive Car';
}
elseif($age >= 1){
    echo 'Your age is less then 25, so you cannot able to drive Car.';
}
else{
    echo 'Please Enter valid Age Value';
}
?>
</b></body></html>
<style>
b{
    background-color: yellow;
    color: red;
}
</style>