<?php
//simple if

$color = 'green'; 

if($color=='red'){
    echo 'Your color is red'; 
}elseif($color=='green'){
    echo 'your color is green';     
}
else{
    echo "${color} is not red"; 
};

//ternary 

$data=[1,];
echo '<br>';    

echo !empty($data) ? 'data ='.$data[0] : 'No data';

echo '<br>';   
$x= $data[0]==0 ? 'null' : 'not null';
echo $x;