<html>
<h6>Arrays</h6>
<?php
  //echo "arrays";

//simple
  $numbers = [1,2,3,4,5]; 
  //print_r($numbers);

  //Associative Array
  $employee = [
    'John'=>'red',
    'Jones'=>'red',
    'Mark'=>'blue',
    'Sam'=>1,
  ];
  //echo $employee['Mark'];

  foreach($employee as $name => $data){
    echo $name . ' ' .$data;
    echo '<br>';
  };
  
  //multidimensional array
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
    echo '<hr>';
   // echo $people[0]['name']; 
foreach($people as $key => $value){
    //echo $key . ' ' ; 
    foreach($value as $label=>$info){
        echo " $label: $info". '<br>';
    }
     echo '<br>';
    }
    echo '<hr>';
  ?>
</html>
