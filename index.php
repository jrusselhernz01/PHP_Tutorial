<?php
   //1 - VARIABLES
    $name = "Russel";
    $age = 21;
    $gender = "Male";

    //2 - ECHO OR PRINT
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";

    //3 - DATA TYPES
    var_dump(false); //CHECK TYPE  OF DATA

    //4 - CONSTANT
    define("MESSAGE", "Thank you for watching!!");
    define("myArray", [0, 1, 2]);
    echo "<br><br>";
    print_r(myArray); //for array PS:not echo
    echo("<br><br>".MESSAGE);

    //5 - OPERATORS
    echo "<br><br>";
    echo 10 % 3;
    echo "<br>";
    echo 4 ** 2; //square root

    //6 - FUNCTIONS
    function sayHi($name){
        return "Hi $name";
    }
    echo "<br>";
    echo sayHi("Russelations!!");

    //7 - ARRAYS
    echo "<br><br>";
    $array1 = ["Apple", 3, 2]; //1 WAY OF DECLARING ARRAY
    $array2 = array("a" => 0, "d" => 2, 4); //2ND WAY OF DECLARING ARRAY PS:can add self index to an array

    print_r($array2); 
    
    //8 - CONDITIONS
    echo "<br><br>";
    $russ = 1;
    if ($russ !== "1"){
        echo "Correct";
    } else{
        echo "Incorrect";
    }
    echo "<br>";
    echo $russ === 1 ? "Corrects" : "Incorrects";
    echo "<br>";

    switch($russ){
        case 1:
            echo "One <br>"; break;
        case 2:
            echo "Two <br>"; break;
        default:
            echo "None"; break;
    }

    //9 - LOOPS
    echo "<br><br>";
    $ctr = 5;
    while($ctr <= 5){
        echo "Counter ".$ctr."<br>";
        $ctr++;
    }

    echo "<br>";
    do{
        echo "Counter ".$ctr."<br>";
        $ctr++;
    } while($ctr <= 5);

    echo "<br>";
    for($r = 1; $r <= 1; $r++){
        echo "Counter ".$r."<br>";
    }

    echo "<br>";
    $xArr = array("code", "with", "a" => "russel");

    foreach($xArr as $index => $value){
        echo "Value ".$index." ".$value."<br>";
    }

    //10 - FORMS
    if(isset($_POST["submit"])){
        $name1 = $_POST["name1"];
        $age1 = $_POST["age1"];
    
        echo "NAME: $name1 <br>";
        echo "AGE: $age1"; 
    }

    //11 - MYSQL
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "php_tutorial";
    $port = 3307;

    $connection = mysqli_connect($host, $user, $password, $database, $port);

    $queryUser = "SELECT * FROM user";
    $sqlUser = $connection->query($queryUser);

    echo "<br><br>";
    // while($results = mysqli_fetch_array($sqlUser)){
    //     echo "[Databases] Name: ".$results['name']."<br>";
    //     echo "[Databases] Age: ".$results['age']."<br>";
    // }

    for($r=1; $r <= mysqli_num_rows($sqlUser); $r++){
        $results = mysqli_fetch_array($sqlUser);
        echo "[Databases] Name: ".$results['name']."<br>";
        echo "[Databases] Age: ".$results['age']."<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/PHP_Tutorial/index.php" method="post">
        <input type="text" name="name1" placeholder="Enter your name">
        <input type="text" name="age1" placeholder="Enter your age">
        <input type="submit" name="submit" value="CLICK">
    </form>
</body>
</html>