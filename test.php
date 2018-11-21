<?php

function fun($n){

   if($n == 1 || $n == 2){

       return 1;

   }else{

       return fun($n-1)+fun($n-2);

   }
}
$a = 25;
print_r(fun($a))

?>