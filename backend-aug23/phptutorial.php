<?php

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
    
    //branching statements - if statement, if...else statement, if...else if...else statement and switch case
    $age = 30;
    if($age>18) {
        echo "Eligible to vote";
    }

    if($age>18) {
        echo "Eligible to vote";
    }
    else {
        echo "Not eligible to vote";
    }

    if($age<18) {
        echo "Not eligible to vote";
    }
    else if($age>18 && $vid==null) {
        echo "Not eligible to vote";
    }
    else if($age>18 && $vid!=null) {
        echo "Eligible to vote";
    }
    else {
        echo "Could not process";
    }

    $grade='B+';
    switch($grade) {
        case 'A+':
            echo "Marks in the range of 95 to 100";
            break;
        case 'A':
            echo "Marks in the range of 90 to 95";
            break;
        case 'B+':
            echo "Marks in the range of 80 to 90";
            break;
        case 'B':
            echo "Marks in the range of 70 to 80";
            break;
        case 'C':
            echo "Marks in the range of 55 to 70";
            break;
        case 'D':
            echo "Marks in the range of 40 to 55";
            break;
        case 'F':
            echo "Marks below 40";
            break;
        default:
            echo "Grade value is wrong";
        
    }

    //looping statements - while loop, for loop, do...while loop and for each loop
    $i=1000;
    while($i<=100) {
        if($i%2==0) {
            echo $i;
        }
        $i++;
    }

    for($i=10000;$i<=100;$i++) {
        if($i%2==0) {
            echo $i;
        }
    }

    $i=100;
    do {
        if($i%2==0) {
            echo $i;
        }
        $i++;
    }
    while($i<=100);

    $arr1 = array(33344,"Hello",true);
    foreach($arr1 as $value) {
        echo '<br>',$value;
    }

    //operations
            # arithmetic operators - +, -, *, /, %, ++, --
            # comparison operators - >, <, >=, <=, ==, ===, !=
            # logical operators - ||, &&, !
            # assignment operators - =, +=, -=, *=, /=, %=
            # ternery/conditional operator - (condition) ? truth statement : false statement

    //functions
    function myfunc($param1,$param2) {
        return $param1+$param2;
    }

    $sum = myfunc(134,454);

    echo array_sum($arr1);

    //superglobal variables
    $username = $_POST['uname'];

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
    <form method="post" action="">
        <label>Enter username:</label>
        <input type="text" name="uname" />
    </form>
</body>
</html>