<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "regis";



$conn = mysqli_connect($servername, $username, $password, $database);



$uname=$_POST['username'];

$password1= $_POST['password'];

// $query = "INSERT INTO `userinfo`(`username`, `name`, `email`, `password`)VALUES ('$uname','$name','$email','$password1')";

$query1="SELECT * FROM 'userinfo';

$result=mysqli_query($conn, $query1);

while ($row=mysqli_fetch_assoc($result)) {
    if ($uname==$row['username'])
    {
        echo "<a href='www.google.com'></a>";
       break; 
    }
    else{
        echo "error";
        break;
       
    }
}

// $pss = "Select * FROM userinfo";





// $result=mysqli_query($conn,$query);

// foreach ($result as $key => $value) {
    
//     foreach ($value as $key1 => $value1) {
//        echo $value1;
//        echo "<br>";
//     }
// }

// if($pss)
// {
//     echo $pss;

// }
// else{
//     echo "try again";
// }

// ?>

