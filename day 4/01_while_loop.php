<?php
 $title = 'While Loop';
 include '../style.php';
?>

<h3><?=$title?> In Php</h3>
<br>

<div id="ex"> <!-- ex 1.0-->
    <h3>ex 1.0</h3>
    <p>Our Code</p>
<pre> 
    $a = 0;

    while($a < 5){
        echo $a . '<br>';
        $a++;
    }
</pre>
    <p>Output</p>
    <?php
    $a = 0;

    while($a < 5){
        echo $a ;
        $a++;
    }
    ?>
</div>

<div id="ex"> <!-- ex 1.1 -->
    <h3>ex 1.1</h3>
    <p>Our Code</p>
<pre> 
    $a = 0;

    while($a < 5){
        echo $a;
        $a+=1;
    }
</pre>
    <p>Output</p>
    <?php
    $a = 0;

    while($a < 5){
        echo $a . '<br>';
        $a+=1;
    }
    ?>
</div>

<div id="ex"> <!-- ex 2-->
    <h3>ex 2</h3>
    <p>Our Code</p>
<pre> 
    $a = 0;

    while($a < 5){
        echo $a+1 ;
        $a++;
    }
</pre>
    <p>Output</p>
    <?php
    $a = 0;

    while($a < 5){
        echo $a+1 . '<br>';
        $a++;
    }
    ?>
</div>

<div id="ex"> <!-- ex 3-->
    <h3>ex 3</h3>
    <p>Our Code</p>
<pre> 
    $a = 0;

    while($a < 10)
    {
        echo $a+1 ;
        $a+=2;
    }
</pre>
    <p>Output</p>
    <?php
    $a = 0;

    while($a < 10 ){
        echo $a+1 . '<br>';
        $a+=2;
    }
    ?>
</div>
<div id="ex"> <!-- ex 4-->
    <h3>ex 4</h3>
    <p>Our Code</p>
<pre> 
    $a = 0;
    $b = 1;

    while($a < 5 && $b< 5 )
    {
        echo $a+1 ;
        $a++;
        $b++;
    }
</pre>
    <p>Output</p>
    <?php
    $a = 0;
    $b = 1;

    while($a < 5 && $b<5 ){
        echo $a+1 . '<br>';
        $a++;
        $b++;
    }
    ?>
</div>