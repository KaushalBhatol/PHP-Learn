<!-- <?php
$title = 'VARIABLES IN PHP';
?> -->

<head><title><?=$title?></title> </head>
<?php

/*  [   VARIABLES   ]

    * variables are containers for storing information
    * start with '$' sign.
    * cannot start with number.
    * must start with letter or underscore (_)
    * variables in php are "case sensetive".

*/
echo '<h3> variable Example : </h3>';
$nm = 'Kaushal Bhatol'; 
echo 'My Name Is '. $nm; // this $nm is our variable 

/*    [   TYPES OF VARIABLES    ] 

    1. String data type 
    2. Integer
    3. float
    4. boolen
    5. object
    6. Array
    7. NULL
*/

 #1 [   String  ] sequence of characters.    {like alphabatics words}
echo '<h3>1. String example :</h3>';
$nm2 = "Kaushal's";
$fd = 'Harsh';
echo $nm2.' fraind is '.$fd;

 #2 [   Integer  ] non decimal number. {numbers without "." }
echo '<h3>2. Integer Example :</h3>';
$nb = 434;
$nb2 = -434;
echo $nb.'and'.$nb2;

 #3 [   Float   ] decimal point number. {numbers with "."}
echo '<h3>3. Float Example :</h3>';
$nb3 = 434.44;
$nb4 = -434.44;
echo $nb3.'and'.$nb4;

 #4 [  boolean ] can be either true or false. {true or false - we lern latter}
echo '<h3>4.boolean Example (without var_dump ) :</h3>';
$bl = true;
$bl2 = false;
echo 'this is '.$bl.' and '.$bl2;
    //  with var_dump {    " var_dump is Used for knowing what variable do."   }
echo '<h3>  boolean Example (with var_dump ) :</h3>';
echo var_dump($bl) . var_dump($bl2);

 #5 [   Object   ] instones of classes  {   "Lern latter in next topics"  }
echo '<h3>5.Object </h3> employ is a class -> harry can be one object.';

 #6 [   Array   ] used to store multiple values in a single variable*
 echo '<h3>6.Array Example (without var_dump ) :</h3>';
 $ay = array('Kaushal', 'Ajay', 'Rutvik');
//  echo $ay; Giving errors

     //  with var_dump
 echo '<h3>  Array Example (with var_dump ) :</h3>';
 echo var_dump($ay);
    //  Use
 echo '<h3>  Array Use :</h3>';
 echo $ay[0].'<br>';
 echo $ay[1].'<br>';
 echo $ay[2].'<br>';

 #7 [   NULL   ] for reset variable         {You can think that null equal to nothing like 0+0 }
 $nl = NULL;
 echo '<h3>7. NULL (for reset variable) </h3>';
 echo 'This is '.$nl; // no value give
?>

