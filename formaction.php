<!-- <?php

if(!empty($_GET)){
    echo $_GET['name'];
    echo "<br>";
    echo $_GET['email'];
}
?> -->
<!-- <?php

if(!empty($_POST)){
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['email'];
}
?> -->

<!-- request -->
<!-- <?php

if(!empty($_REQUEST)){
    echo $_REQUEST['name'];
    echo "<br>";
    echo $_REQUEST['email'];
}
?> -->

<!-- <?php
// passing arguments by value and by preference
function show_message(&$msg){
    $msg .= ", Nice to see you";
    echo $msg;
}

$message ="Hello Dear";
show_message($message);
echo "<br>", $message;
?> -->
<!-- <?php
// default arguments values
function show_name($name,$prefix = "Mr."){
    return $prefix . " " . $name;
}
$username = show_name("Ahzam");
echo $username;
?> -->