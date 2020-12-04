<!-- <?php // 03, December 2020
    $title = 'If Else in Php';
    $age = $_GET['age'];
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
</head>
<body>
<form action="01-if_else.php" method="get">
    <input type="number" name="age" placeholder="age" value="<?=$age?>" required> <input type="submit" value="submit">
</form>

<h3>Our Code is</h3>
<pre>
#   If
if($age >= 18) {
    echo 'You Can able to visit site ';
}
echo 'if age is less then 18, Nothing show upper hear'.


#   1.2 if else
'1.2 if else';
if($age >= 18) {
    echo 'You Can able to visit site ';
}
else{
    echo "you Can't able to visit site";
}


#2 if elseif else
if($age >= 25 ){
    echo 'You Can Able to Drink All ';
}
elseif($age >= 18){
    echo 'You Can Able To drink Alchohol';
}
else{
    echo 'You can able To drink milk only.' ;</pre>
<?php
/*  IF ELSE STATE MENTS IN PHP
     TWO TYPES IN IF ELSE STATEMANT

     1. IF ELSE OR IF ONLY
     2. IF ELSEIF ELSE

*/
echo  #1 If else or if only
'<p>You enterd <b>'. $age . '</b>, as your age.</p>' .
#   If
'<h3>1.1 If only</h3>';
if($age >= 18) {
    echo 'You Can able to visit site <br>';
}
echo '<p>NOTE : if age is less then 18, Nothing show upper hear</p>'.

#   1.2 if else
'<h3>1.2 if else</h3>';
if($age >= 18) {
    echo 'You Can able to visit site <br>';
}
else{
    echo "you Can't able to visit site";
}

echo #2 if elseif else
'<h3>2. if elseif else </h3> ';
if($age >= 25 ){
    echo 'You Can Able to Drink All ';
}
elseif($age >= 18){
    echo 'You Can Able To drink Alchohol';
}
else{
    echo 'You can able To drink milk only.' ;
}

?>
</body>
</html>

<style>
b{
    background-color: yellow;
    color: red;
}
pre {
    background-color: yellowgreen;
    padding: 10px 0px 10px 10px;
    overflow: hidden;
}
input[type="number"]{
    width: 40px;
    padding:4px 0px 4px 0px;
    border: none;
    margin-right: 20px;
}
input[type="number"]:focus{
    background-color: black;
    color: white;
    width: 60px;
    border: none;
}
input[type="number"]:hover{
    background-color: black;
    color: white;
    width: 60px;
    border: none;
}
input[type="submit"]{
    background-color: blue;
    color: white;
    padding: 2px 5px 2px 5px;
    border: none;
}
body {
    padding:0 0 20px 0;
    background-color:teal;
}
</style>