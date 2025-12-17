<?php

// indexed array
// associative array
// multidimensional array


// indexed arrays

$name = 'Linus';
echo '<h1>Hello $name</h1>';
echo "<h1>Hello $name</h1>";

$number = [82, 87, 67, 56];

echo $number[0];
echo "<br>".$number[3];
echo "<br>".$number[1];

$a = ['Apple', 'Banana', 'Mango'];
$b = ['Red', 'Yellow', 'Narngi'];

echo "<br>";

// $c = $a[0] . " fruit ". $b[0]. " color ". $a[1]." same ".$b[1]. " this is match value";
$c = "$a[0] fruit $b[0] color this is match value";

echo $c;

echo "<hr>";

$fruites = ['Apple', 'Banana', 'Mango'];

foreach($fruites as $fruite){
     echo $fruite . '<br>';
}

echo "<hr>";

// How many items in array
 $data = ['Raju', 'krisna', 'penthr', 'rahul'];

 echo count($data);

echo "<hr>";

// replase value
$replase_value = ['chatgpt', 'Gemini', 'Blackbox', 'bot'];
array_splice($replase_value, 0, 1, ['vijendra', 'chaudhary']);
$replase_value[2] = 'boxBlack';

// var_dump($replase_value); // var_dump type with length

print_r($replase_value);

echo "<hr>";

$multidimensional  = [
     ['name', 'ruhi'],
     ['age', 19],
     ['grade', '3th']
];


echo $multidimensional[0][0];

echo "<br>";


// array_pop($multidimensional);
// array_push($multidimensional, ['test', 'test2', 9]);
// array_unshift($multidimensional, ['Dhan', 'Dhan', 90]);
// array_shift($multidimensional);
// array_splice($multidimensional, 1, 0, ['juhy', 'kijuki']);

print_r($multidimensional);

$array = [
     ['Dhan1', 'Dhan2'],
     ['Dhan3', 'Dhan4'],
     ['Dhan5', 'Dhan6'],
     ['Dhan7', 'Dhan8']
];

foreach($array as $key => $data){
     echo "<br>";
     print_r($data);
}

echo"<br>";

for ($i = 0; $i < count($array); $i++) {
echo "<br>";
     print_r($array[$i]);
}

echo"<br>";

for($v = 0; $v <= 10; $v++) {
     for($j = 0; $j <= $v; $j++){
          echo  '* ';
          
     }

     echo "<br>";
}


echo "<hr>"

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     <p>Lorem ipsum dolor sit amet.</p>
     <h3 id = "h3"> are you learn jquery</h3>

<script>
     $(document).ready(function() {
          $("#h3").mouseenter(function() {
               window.alert("Are you sure lean jquery");
          });
     });
</script>

<p id = "pudg"> Are you sour leave the game</p>


<script>
     $(document).ready(function() {
          $('#pudg').mouseleave(function() {
               $(this).hide();
          });
     });
</script>


     
</body>
</html>