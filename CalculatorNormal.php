<?php

//FIRST NUMBER CODE BLOCK

echo "Enter your first number between 1 and 999,999\n";
$firstnumber = stream_get_line(STDIN, 7, "\n");

//INFO
//Check input of first number - is it empty or NULL? If NULL - re-serve the question only. If NULL again DIE and request user to restart - WORKING
if ($firstnumber == null) {echo "You have not entered anything. Enter your first number between 1 and 999,999\n";
$firstnumber = stream_get_line(STDIN, 7, "\n");}

if ($firstnumber == null) {die ( 'You did not enter a number again. Please restart') ;}

//INFO
//Check input from user to see if it is a number or letter. If it is a number say thank you and continue. If not display message saying they have not entered a number and re serve the question.

//use (!is_numeric($firstnumber)) to make NOT numeric
 if (is_numeric($firstnumber)) {
 echo 'Thank you' . "\n"; }
        else {
            echo 'You have not entered a number.' . "\n" . 'Please try again entering a number. Enter your first number between 1 and 999,999' . "\n";
            $firstnumber = stream_get_line(STDIN, 7, "\n");}
            
// Second request for correct information. If fails. DIE
//use (!is_numeric($firstnumber)) to make NOT numeric            
            if (is_numeric($firstnumber)) {
 echo 'Thank you' . "\n"; }
        else {die ( 'You did not enter a number again. Please restart') ;}
            

//SECOND NUMBER CODE BLOCK
    
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
        
//Code for the operator function

echo "Enter your operation (/ or * or +\n";
$operator = stream_get_line(STDIN, 1, "\n");
if ($operator == "/" && $secondnumber == "0"){die ( 'Division by Zero Error');}




If ($operator == "+") 
{ echo "$firstnumber" +  "$secondnumber";}
Else If ($operator == "-") 
{ echo "$firstnumber" -  "$secondnumber";}
Else If ($operator == "x") 
{ echo "$firstnumber" *  "$secondnumber";}
Else If ($operator == "*") 
{ echo "$firstnumber" *  "$secondnumber";}
Else If ($operator == "/") 
{ echo "$firstnumber" /  "$secondnumber";}
Else {die ("That is an incorrect operator.");}
//if ($operator == "/" && $secondnumber = "0") {die ('Division by zero error');}
//else if ($divisionbyzero) die('There has been an error');














