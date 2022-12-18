<?php 
require 'index.php';

for($x=0; $x<10; $x++ ){
    echo $x;
    if($x<9){
        echo ", ";
    }
};
echo '<br>';

$data = ['1','2','3','Finals']; 

// for($x=0; $x<count($data);$x++){
//     echo $data[$x];
//     echo '<br>'; 
// };

foreach($data as $index => $value){
    echo $index+1 . "-" . $value. "<br>";
}

$people=[
    [
        'name'=>'John Mark',
        'email'=>'john@gmail.com',
        'number'=>'911'
    ],
    [
        'name'=>'Sam Mark',
        'email'=>'sam@gmail.com',
        'number'=>'912'
    ],
    [
        'name'=>'Magic Mark',
        'email'=>'magic@gmail.com',
        'number'=>'913'
    ],
];

foreach($people as $label=>$post){ 
    foreach($post as $info => $key){
        echo "$info: $key <br>";
    }
}

?>