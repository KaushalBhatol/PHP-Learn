<!-- <?php
$title = 'Switch Case Statement'; // 03, Dec-2020 . By Kaushal Bhatol
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
    <form action="02-Switch_case_statement.php" method="get">
        <input type="text" name="age" value="<?=$age;?>"  placeholder="$age" autofocus>
        <input type="submit" value="Submit">
    </form>

<p>You Enterd <b class='age'><?=$age;?></b>, your age</p>

  <div id="ex_1">
    <h3>(Example 1) Without Breck </h3>
    <p>If You enter any age from 12, 45, 56 , defult you can got exicuted age and after that all case are exicute.
      <ul>
      <li>like if you enter 12 you got also 45, 56 and defult value.</li>
      <li>if you enter 45 you got also 56 and defult value. </li>
      <li>from those all you enter other number You Can Got Defult Only. </li>
      </ul>
      <br>
      Our Code Is 
      <pre>
      switch($age){
      case 12:
        echo 'Your age is 12';
      case 45:
        echo 'Your age is 45';
      case 56:
        echo 'Your age is 56';
      default:
        echo 'Your age is defult';
      }
      </pre>
      Your Result :
    </p>
<b>
    <?php
    switch($age){
      case 12:
        echo 'Your age is 12 <br>';
      case 45:
        echo 'Your age is 45 <br>';
      case 56:
        echo 'Your age is 56 <br>';
      default:
        echo 'Your age is defult <br>';
    }
    ?>
</b>
  </div>

  
  <div id="ex_2">
    <h3>(Example 2) With Break </h3>
    <p>If You enter any age from 12, 45, 56 , defult you can got thair value.
      <ul>
      <li>like if you enter 12 you got only 12 case exicute</li>
      </ul>
      <br>
      Our Code Is 
      <pre>
      switch($age){
      case 12:
        echo 'Your age is 12 ';
      break;
      case 45:
        echo 'Your age is 45';
      break;
      case 56:
        echo 'Your age is 56 ';
      break;
      default:
        echo 'Your age is defult ';
      break;
    }
      </pre></p>
      Your Result : <b>
    
    <?php
    switch($age){
      case 12:
        echo 'Your age is 12';
      break;
      case 45:
        echo 'Your age is 45 ';
      break;
      case 56:
        echo 'Your age is 56 ';
      break;
      default:
        echo 'Your age is defult ';
      break;
    }
    ?>

    </b>
  </div>

</body>
</html>

    <!-- FOR STYLING HTML  -->

<style>
b.age {
    color: red;
}
form {
    text-align: center;
}

h3 {
    text-align: center;
    position: relative;
    font-family: serif;
    padding: 0 0 2px 0;
}

#ex_1, #ex_2 {
    border: 1px solid black;
    margin:0 0 60px 0;
    padding: 2px 15px 15px 15px;
}

pre {
    font-family: sans-serif;
    padding:10px 0 0 0;
    background-color: yellowgreen;
}

b {
    background-color: yellow;
}

input[type="text"]{
  width:60px;
}
</style>