<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
<!-- <style>
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style> -->
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
<!-- <?php
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

?> -->

<!-- <?php
// associate array
$marks = ['maths' => 60, 'english' => 75, 'science' => 65];
echo count($marks);

?> -->
<!-- <?php 
// multidimensional array
$students = array(
    "Ali" => array('maths' => 60, 'english' => 75, 'science' => 65),
    "Abbas" => array('maths' => 80, 'english' => 70, 'science' => 75),
    "Ahmad" => array('maths' => 70, 'english' => 85, 'science' => 70),
);
echo "<pre>";
$students ["Hamza"] = array('maths' => 60, 'english' => 75, 'science' => 80);
print_r($students);
$employee = ["Ali","Ahmad","Hamza"];
if(in_array("Ali", $employee)){
    echo "Exist";
}
else{
    echo "not exist";
}
?> -->
<!-- <?php
//strings
$message = "Hello world! This is my first php practice project";

if(strpos($message, "world1") !== false){
    echo "Found";
}
else{
    echo "not found";
}
$filename = "profile.php";
$extension = substr($filename, strlen($filename) - 3);
echo $extension;

// joining and spliting
$fruits = "apple, banana, orange";
$fruitsArr = explode(", " ,$fruits);
echo "<pre>";
print_r($fruitsArr);

$languages = ["PHP","JAVA","PYTHON"];
$langList = implode(",", $languages);
echo $langList;
?> -->

        <!-- <form action="formaction.php" method="get">
            <label for="name">Name</label>
            <input type="text" name="name" value="">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" value="">
            <br>
            <br>
            <input type="submit" name="submitbtn" value="SUBMIT">
            <br>
            <br>
        </form> -->
<!-- 
        <form action="formaction.php" method="post"">
            <label for="name">Name</label>
            <input type="text" name="name" value="">
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" value="">
            <br>
            <br>
            <input type="submit" name="submitbtn" value="SUBMIT">
            <br>
            <br>
        </form> -->

<!-- <?php
// functions
function add($num1,$num2){
    $sum = $num1 + $num2;
    echo $sum;
}
add(4 ,7);
?> -->
<?php
// functions with return
// function sub($num1,$num2){
//     $sub = $num1 - $num2;
//     return $sub;
// }
// $result = sub(4 ,7);
// echo $result;

function sum (...$numbers)
{
    $sum = 0;
    if(!empty($numbers)){
        foreach ($numbers as $num) {
            $sum += $num;
        }
    }
    return $sum;
}
$res = sum(5,9,8,3,5,6);
echo "Sum = " . $res;
?>


    </div>
</body>
</html>
