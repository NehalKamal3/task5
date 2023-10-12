<?php
//   1
function factorial(int $x){
   $r =1 ;
    if($x > 0){
        for($i=1 ; $i<=$x ; $i++){
            $num = ($r*= $i)  ;
          
        } echo 'factorial of number '.$x.' = ' .$num;
    }
    else{
        echo 'please enter a positive number';
    }
}

factorial(5);

echo '<br>';

//     2


function reverse($name){

     $len=strlen($name);


    for($i=($len-1) ; $i>=0 ; $i--){

    $rev =  $name[$i] ;
    echo $rev;

 } echo ' : is the reverse of : '.($name)  ;
 


}
reverse('welcome to the page');

echo '<br>';


// 3  recursive function example on (fibonacci numbers)

function fib($n)    
{    
if ($n == 0)   { 
return 0;  
}
elseif ($n == 1) {   
return 1;
}

return (fib($n-1) + fib ($n -2));   

}
 
echo fib(8);    
 
 echo '<br>';






// 4

function firstName(string $name2){

    $len=strlen($name2);
   
    $txt = explode(' ',trim($name2));
    echo $txt[0];
  
   
}

firstName('This is a new text for...');

echo '<br>';

//   5

function password($pass ,$lenght){

    $len=strlen($pass);

    echo 'random password is : ';
    for($i = 0; $i <= $lenght; $i++){

        $index = rand(0, $len - 1);
     
          echo $pass[$index];


    }
}
password('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' , 9);

echo '<br>';

//    6

function newline(string $num){

     if($num >= 10){
     $len = strlen($num);

    for($i = 0; $i < $len; $i++){

    echo $num[$i].'<br>';
  }
  }
}

newLine(309812745);







?>
