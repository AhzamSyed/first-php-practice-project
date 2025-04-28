<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
    <!-- <?php
        echo "Hello World";
        $var1 = 3;
        $var2 = 2;

        echo $var1;
        echo $var2;
        echo $var1 + $var2; 
        echo "<br>";
        
        //airhtematic operators
        echo "The value of var1 + var2 is : ";
        echo $var1 + $var2;
        echo "<br>";

        echo "The value of var1 - var2 is : ";
        echo $var1 - $var2;
        echo "<br>";

        echo "The value of var1 * var2 is : ";
        echo $var1 * $var2;
        echo "<br>";

        echo "The value of var1 / var2 is : ";
        echo $var1 / $var2;
        echo "<br>";

        echo "The value of var1 % var2 is : ";
        echo $var1 / $var2;
        echo "<br>";

        class ABC{
            public $name;
            public function a(){
                return "Hello World!";
            }
        }
        $classObj = new ABC();
        var_dump($classObj);

        ?> -->
<!-- 
<?php 
//logical operators
    $var1 = 1;
    $var2 = 0;

    if($var1 || $var2)
    {
        echo"a is equal to b";
    }
    else{
        echo"a is not equal to b";
    }
?> -->

<!-- <?php
    // conditional operators
   $a = 10;
   echo $a > 10 ? "Greather than 10" : "Less than 10";
?> -->

<!-- <?php
// decision making statement
//$day = date('D');
$day = "Sat";
if($day == 'Sun' || $day == "Sat"){
    echo "Happy Weekend!";
}
else if($day == "Fri"){
    echo"Weekend is coming soon!";
}
else{
    echo"Weekday.";
}
?> -->

<!-- <?php
//switch statement 

//$day = date('l');
$day = "Saturday";
switch ($day) {
    case 'Saturday':
        echo "Happy Weekend!";
        break;
    case 'Sunday':
        echo "Happy Weekend!";
        break;
    case 'Friday':
        echo "Weekend is coming soon!";
        break;
    default:
        echo "Weekday";
        break;
}
?> -->

 <!-- <?php
//for loop
for($i = 1; $i<=10; $i++){
    echo "Number is : " , $i , "<br>";
}

?>  -->
<!-- <?php
//while loop

$i = 1;

while ($i <=5){
    echo "Number is : " , $i, "<br>";
    $i++; 
}
?> -->

<!-- <?php
// foreach loop
$employee = ["Ali" => 23, "Ahmad" => 26, "Ahmer" => 28];
foreach($employee as $name => $age){
    echo $name . " : " . $age;
    echo "<br>";
}
?> -->
<?php
// array
//  - Indexed Array
//  - Associate Array
//  - Multidimensional Array


// Indexed Array

$arr = array (1,"a",3,3.14,6);
//array_push($arr, 0);
array_shift($arr);
echo "<pre>";
print_r($arr);

?>
    </div>
</body>
</html>
