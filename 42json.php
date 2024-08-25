<?php
// array to json

// $user = ['name'=> 'peter', 'age'=>'34', 'email'=>'abc@text.com'];
// $userjson = json_encode($user);
// echo $userjson;

// json to array
$data = '{"name":"peter","age":"34","email":"abc@text.com"}';
$datarry = json_decode($data, true);
print_r($datarry);
?>