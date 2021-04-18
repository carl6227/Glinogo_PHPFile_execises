<?php 
//1. defining a filenie function.
function fileLine($file_name,$line_number){
    if(file_exists($file_name)){    
            $lines=file($file_name);
            echo $lines[$line_number-1];
            }
}
//calling the fileline function.
echo '<h5> Number 1-fileLine("text.txt", 3) </h5>';
fileLine('text.txt',3);


//2. defining apendline function.
function appendLine($file_name,$string_to_be_inserted,$line_number){
    if(file_exists($file_name)){
        $file = file($file_name);   
        $line = $file[$line_number];  
        array_splice($file, $line_number-1, 0, $string_to_be_inserted);   
        file_put_contents($file_name, join("\n", $file)); 
        echo "String appended to line $line_number successfully!";
    }else{
         echo 'file do not exist!';

    }
  
}
//calling the appendline.
echo '<h5> Number 2- appendLine("text.txt","Patrick Carl Glinogo",1)</h5>';
appendLine('text.txt',"Patrick Carl Glinogo","1").'<br>';


//3. defining a randomLiner function.

function randomLiner($filename){
    if(file_exists($filename)){
        $file= file_get_contents($filename);
        $file=strtolower($file);
        $a=substr_count($file,"a");
        $e=substr_count($file,"e");
        $i=substr_count($file,"i");
        $o=substr_count($file,"o");
        $u=substr_count($file,"u");
        $total= $a+$e+$i+$o+$u; 
        if ($total%2==0){
           $file_array=file($filename);
           print_r( $file_array[3]);         
        }else{
            $file_array=file($filename);
            print_r( $file_array[4]);   
        }
    }else{
   echo 'No file exists';
    }
}
echo '<h5> Number 3- randomLiner("text2.txt") </h5>';
randomLiner('text2.txt').'<br>';


//4. Writing a function that test the loyality of a name.
 
function testLoyalty($name){
    $name=strtoupper($name);
    $E=substr_count($name,'E');
    $A=substr_count($name,'A');
    $N=substr_count($name,'N');
    $total=$E+$A+$N;
    if ($total>=3 && ($total*strlen($name))%6==0){
         echo $name. " is Loyal";
    }else{

         echo $name. " kay Di sure";   
    }
}
//calling the isLoyal function.
echo '<h5> Number 4- testLoyalty("ELEASSARR")</h5>';
testLoyalty("ELEASSARR").'<br>';




// 5. defining a function that return a factorial of a number.
function factorial($number){
$factorial=1;
    if ($number>0){
        for ($i=1;$i<=$number;$i++){
            $factorial=$factorial*$i;
        }
    echo "Factorial of $number is ".$factorial;
    }else{
    echo "Factorial of $number is ".$number*-1;
    }
}
//calling the factorial function.
echo '<h5> Number 5- factorial(-1) </h5>';
factorial(-1).'<br>';







//6. creating a function on indentifying if a number is a prime number or not.
function  isPrime($number){
    for($i=2; $i<$number; $i++){
        if($number % $i ==0){
        return false;
        }
    }
    return true;
}

//calling the isPrime function and executing final validation.
echo '<h5> Number 6- isPrime(11)</h5>';
 $finalValidation=isPrime(11);
 if ($finalValidation==true){
    echo ' Prime number.'.'<br>';
 }else{

    echo 'Not a Prime number.'.'<br>';
 }



//7. creating a function that reverse a string.
function reverseHalf  ($string){
    if (strlen($string)%2==0){
        $string=substr($string,strlen($string)/2);
        echo 'String length is even.';
        echo '<br>';
        echo 'Reversed String:   '.strrev($string);
    }else{
        echo 'String length is odd.';
        echo '<br>';
        echo 'Reversed String:   '.strrev($string);
    }
};
//calling the reverseString function.
echo '<h5> Number 7- reverseHalf("patricks") </h5>';
reverseHalf('patricks').'<br>';
?>