<?php
//FIRST NUMBER CODE BLOCK
//FIRST NUMBER REQUEST
echo "Enter your first number between 1 and 999,999\n";
$firstnumber = stream_get_line(STDIN, 7, "\n");

//CHECK FIRST NUMBER IS NULL OR EMPTY
if ($firstnumber == null) {echo "You have not entered anything. Enter your first number between 1 and 999,999\n";
$firstnumber = stream_get_line(STDIN, 7, "\n");}

if ($firstnumber == null) {die ( 'You did not enter a number again. Please restart') ;}

//INFO
//Check input from user to see if it is a number or letter. If it is a number say thank you and continue. If not display message saying they have not entered a number and re serve the question.

 if (is_numeric($firstnumber)) {
 echo 'Thank you' . "\n"; }
        else {
            echo 'You have not entered a number.' . "\n" . 'Please try again entering a number. Enter your first number between 1 and 999,999' . "\n";
            $firstnumber = stream_get_line(STDIN, 7, "\n");}
            
// Second request for correct information. If fails. DIE
            
            if (is_numeric($firstnumber)) {
 echo 'Thank you' . "\n"; }
        else {die ( 'You did not enter a number again. Please restart') ;}
            


//if ($firstnumber == null) {die ( 'Your input for the first number is empty. Please restart and try again, entering a value for the first number');}




//SECOND NUMBER REQUEST
echo "Enter your second number between 1 and 999,999\n";
$secondnumber = stream_get_line(STDIN, 7, "\n");

//Check input of second number - is it empty or NULL? If NULL - re-serve the question only - WORKING
if ($secondnumber == null) {echo "You have not entered anything. Enter your second number between 1 and 999,999\n";
$secondnumber = stream_get_line(STDIN, 7, "\n");}

if ($secondnumber == null) {die ( 'You did not enter a number. Please restart!');}

//Check input from user to see if it is a number or letter. If it is a number say thank you and continue. If not display message saying they have not entered a number and re serve the question.

 if (is_numeric($secondnumber)) {
 echo 'Thank you' . "\n"; }
        else {
            echo 'You have not entered a number.' . "\n" . 'Please try again entering a number. Enter your first number between 1 and 999,999' . "\n";
            $secondnumber = stream_get_line(STDIN, 7, "\n");}
            
// Second request for correct information. If fails. DIE
            
            if (is_numeric($secondnumber)) {
 echo 'Thank you' . "\n"; }
        else {die ( 'You did not enter a number again. Please restart') ;}

//CHECK SECOND NUMBER IS NULL OR EMPTY. IF YES - DIE
//if ($secondnumber == null) {die ( 'Your input for the second number is empty. Please restart and try again, entering a value for the second number');}

//OPERATOR FUNCTION CODE
echo "Enter your operation (/ or * or + or -\n";
$operator = stream_get_line(STDIN, 1, "\n");
if ($operator == "/" && $secondnumber == "0"){die ( 'Division by Zero Error');}

switch ($operator)
{
    case "/";
        echo ($firstnumber / $secondnumber);
        //if ($operator == "/" && $secondnumber == "0")
        //die ('that is an error');
                break;
            
    case "*";
        echo ($firstnumber * $secondnumber);
        break;
    
    case "x";
        echo ($firstnumber * $secondnumber);
        break;
    
    case "+";
        echo ($firstnumber + $secondnumber);
        break;
    
    case "-";
        echo ($firstnumber - $secondnumber);
        break;

        
   
    
}


