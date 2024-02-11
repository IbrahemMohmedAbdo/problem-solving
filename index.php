<?php 
# problem solving to return odd number appears one time in array format

function findIt(array $seq) : int
{
    // Enter your code here
 $result=0;
  foreach($seq as $num)
    {
    $result ^= $num ;
    
  }
  return $result;
  
}
#