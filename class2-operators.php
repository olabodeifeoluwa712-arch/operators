<?php

// Operations in PHP
// 1. Arithmetic Operators - Operands are the values on which the operator operates. For example, in the expression $a + $b, $a and $b are operands, and + is the operator.
    // +, -, *, /, %, **
    // Example: BODMAS (Brackets, Orders, Division, Multiplication, Addition, Subtraction)
    // Example: Modulo Operator (%) simply means the remainder after division. It gives the remainder of the division of two numbers.
    
    // echo $c**5; // Output: 5
// 2. Assignment Operators
    // =, +=, -=, *=, /=, %=, **=
    // Example: $a += 10 is equivalent to $a = $a + 10. 
    //It adds 10 to the current value of $a and assigns the result back to

    // echo $c /= 2;

// 3. Comparison Operators
    //  ==, ===, !=, !==, >, <, >=, <=
    // Example: The == operator checks if the values of two operands are equal, while 
    // "2" == 2  will only check the values and return true if equal
    // "2" === 2 will check both the value and the data type, and return false because one is a string and the other is an integer.

    $a = 100; // string 
    $b = 199; // integer
    $d = 21;
    $c = $a % $d;
    // var_dump ($d >= $b);
    
// 4. Increment/Decrement Operators
    // ++, --
    // echo $a-- . '<br>'; 
    //  echo $a++ . '<br>'; // Post-increment: returns the value before incrementing
    //  echo --$a; 
     /*
        Thompson, Michael
        200
        199
        199

        Emmanuel
        200
        200
        199

        sebastian, bolu
        199
        200
        199
     */
    //  echo $a;
    //  echo $a++;
    //  echo ++$a;
    //  $a--; 
    //  $a = $a - 1;
    //  echo $a;

// 5. Logical Operators 
    // &&, ||, !, and, or, xor
    // and, or, xor have lower precedence than &&, ||, and !. This means that when using a combination of these operators, the &&, ||, and ! operators will be evaluated before the and, or, and xor operators.
    // Example: The && operator returns true if both operands are true, while the || operator

    //truth table 
    /*
    A       B       A && B     A || B
    true    true    true        true
    true    false   false       true
    false   true    false       true
    false   false   false       false   

    The law says that && can be only true when both operands are true;

    example:
    $x = 1;
    $y = 20;    
    if ($x > 5 || $y < 30) {
        echo "Both conditions are true.";
    } else {
        echo "At least one condition is false.";
    }

    classwork:
    another example
    $x = 300;
    $y = 500;
    if($x % 2 == 0 && $y % 2 == 0){
        echo "Both numbers are even.";
    } else {
        echo "At least one number is odd.";
    }

    */

// 6. String Operators
// 7. Array Operators
// 8. Conditional Assignment Operators


//get the values submitted
//check if method post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    if($a && $b == 'thompson'){
        echo "You are free to go to dashboard";
    } else {
        echo "Invalid username or password";
    }
}

// assignment: create a simple score grading app that takes in a score and outputs the grade based on the following criteria:
/*
90-100: A
80-89: B
70-79: C
60-69: D   
0-59: F         
*/



?>

<html>


<script>


</script>

<style>
    .first{

    }

    h1{

    }

    div{

    }


</style>

<body>
    <form action="" method="post">
        <input type="text" name="firstname" id="name" placeholder="Enter First Value">
        <input type="text" name="lastname" id="name" placeholder="Enter Second Value">
        <input type="submit" value="Submit">

    </form>


</body>



</html>