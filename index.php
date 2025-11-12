<?php
                                // VARIABLES //
$name = "chenje";
$age = 19;
$developer = true;

echo "My name is $name and I am $age years old.";
echo "<br>";
// nb:variable must start with $ and can't start with number like $1age

                          
                      // DATA TYPES //
$string   = "hello word";            // text
$integer = 100;                     //whole number
$float   = 3.14;                    // number with decimal
$boolean = true;                    // true or false 
$array   = ["HTML", "CSS" , "PHP"];  // list of things
$null    = null;                    // no value
var_dump($array);                   // it shows type + value
echo "<br>";

                     // OPERATORS //
$x = 10;
$y = 3;
echo $x + $y;   // 13
echo "<br>";
echo $x - $y;   // 7
echo "<br>";
echo $x * $y;   // 30
echo "<br>";
echo $x / $y;   // 3.3333
echo "<br>";
echo $x % $y;   // 1(remainder)
echo "<br>";


                     // ASSIGNMENT //
$x = 5;
$x += 3;    // $x = &x + 3;
echo $x;    // 8
echo "<br>";

                     //* COMPARISON *//
$a = 10;
$b = "10";
var_dump($a == $b);      // true (values equals)
echo "<br>";
var_dump($a === $b);     // false (values equa but types differ)
echo "<br>";
var_dump($a != $b);      // false
echo "<br>";
echo "<br>";


                       //* LOGICAL *//
$b = true;
$c = false;
var_dump($b && $c);    //false
echo "<br>";
var_dump($b || $c);    //true
echo "<br>";
var_dump(!$c);         //false
echo "<br>";
echo "<br>";


                       //* CONDITION STATEMENTS *//
//1. if ,else , else if
$age = 41;

if($age <18){
    echo "Your child";
} else if($age <= 40 ){
    echo "Teenegar";
} else{
    echo "Adult";
}
echo "<br>";
echo "<br>";

// 2.Switch - used when you have many conditions
$day = "thursday";

switch($day){
    case "monday":
     echo "Man Crush Monday (MCM)";
    break;
    case "tuesday":
     echo "Tag Post Tuesday (TPT)";
    break;
    case "wednesday":
     echo "Woman Crush Wednesday (WCW)";
    break;
    case "thursday":
     echo "Throw Back Thursday (TBT)";
    break;
    case "friday";
     echo "Fun Fact Friday (FFF)";
    break;
    case "sunday";
     echo "Church Sunday (CS)";
     default:
      echo "weekend";
}
echo "<br>";
echo "<br>";

// 3. for loop
for( $i= 1; $i<= 5; $i++){
    echo "Number:  $i <br>";
}
echo "<br>";
echo "<br>";

// 4.for each loop
$name = ["Chenje" , "John", "Anna" , "Harry", "Giana"];
foreach($name as $person){
    echo "Hello, $person! <br>";
}
echo "<br>";
echo "<br>";

// 5.loop control statements
for( $i= 1; $i<= 5; $i++){
    if($i == 3) continue;    // to skip certain iteration
    echo $i . "<br>";
}
echo "<br>";
echo "<br>";

for( $i= 1; $i<= 10; $i++){
    if($i == 7) break;       // to stop loop
    echo $i . "<br>";
}
echo "<br>";
echo "<br>";

for($i=1; $i<=50; $i++){
    if($i %5 == 0) continue;
    echo $i . "<br>";
}
echo "<br>";
echo "<br>";

// sort [ksort()] - sort in alphabetical order , [krsort()] - sort in reverse,  [asort()] - sort values in order  [arsort()] - sort values in reverse

/// task 1 
$people = ["Paul" => "20", "Asha" => "22", "Brian" => "21", "Juma" => "25", "Eliza" => "23"];
ksort($people);   // sort alphabetically
asort($people);
foreach($people as $name => $values){
    echo "$name is $values years old. <br>";
}
echo "<br>";
echo "<br>";


                                //* FUNCTION *//
function  addnumbers($a, $b){
    return $a + $b;
}
echo addnumbers(5, 12);    // 17
echo "<br>";

$students = ["Marry" , "Yaqlab", "David"];
function greetstudent($students){
    foreach($students as $names){
        echo "Hello, $names! <br>";
    }
}
greetstudent($students);


                        //* SUPERGLOBAL *//
// 1.$_POST & $SERVER
if (isset($_POST['submit'])){

    // get datas from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // hash pasword for more security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // simple verification 
        echo '<script type="text/javascript">';
        echo 'alert("SUCCESS: Form submitted succesfully!");';
        echo '</script>';
        echo "<h3 style='color:green;'></h3>";
}


               //* CONNECT PHP TO XAMPP SERVER *//
//Database Connection Parameters
$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "php";

// conection to database
$conn = new mysqli($servername, $username, $db_password, $dbname);

// chek connection
if ($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

//prepare INSERT command
$sql = "INSERT INTO users (NAME , EMAIL , PASSWORD) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $name , $email , $hashed_password);

if ($stmt->execute()){
    $status = "success";
} else {
    $status = "error";
}


$stmt->close();
$conn->close();

header("location : form.php");
exit();
?>