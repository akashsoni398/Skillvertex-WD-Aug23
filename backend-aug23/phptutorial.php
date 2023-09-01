<?php
    $username = "Akash";

    // single line comment

    /* multiple 
    line
    comment */

    // storage - variables
    $variable =34; // declaration & initialization
    $werer3423; $_asdasd323432; $S; $s; //variable name doesnt start with a number
    $a = "String";            //string DT
    $b = 32432;               //integer DT
    $c = "2432432";           //string DT
    $d =true;                 //boolean DT
    $e = 34324.34;            //float DT
    $f = [33344,"Hello",true];   //array - index value array, key-value pair array

    $arr1 = array(33344,"Hello",false);
    Echo $arr1[2];

    $arr2 = array('name'=>['uid'=>4342],'age'=>25,'passed'=>true);
    echo $arr2['name']['uid'];

    // output
    echo "Hello World","My name is ",$username,32434,true;
    $result = print("Hello World"."My name is ".$username.true);
    if($result) {
        echo "Print successful";
    }
    //branching statements

    //looping statements

    //operations

    //functions

    //superglobal variables

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <b>Hello. My name is <?php echo $username ?>.</b>
</body>
</html>