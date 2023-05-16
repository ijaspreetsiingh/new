<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border-radius:9px;
			border:2px solid black ;
			width: 50%;
			padding:20px;
            background-color:white;
		}
        input{
            margin:10px;
            padding:10px;
            font-size:18px;
        }
        input[type="submit"]{
            width: 130px;
            border-radius:9px;
        }
        input[type="submit"]:hover{
            background-color:gray;
            color:white;
          
        }
        h1,h2{
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            font-size:20px;
            font-family: Arial, Helvetica, sans-serif;
        }




        .checkmark__circle{stroke-dasharray: 166;
          
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards}
            .checkmark{
                width: 56px;
                height: 56px;
                border-radius: 50%;
                display: block;
                stroke-width: 2;
                stroke: #fff;
                stroke-miterlimit: 10;
           
                box-shadow: inset 0px 0px 0px #7ac142;
                animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both}

                .checkmark__check{transform-origin: 50% 50%;
                    stroke-dasharray: 48;
                    stroke-dashoffset: 48;
                    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards}
                    @keyframes stroke{100%{stroke-dashoffset: 0}}
                    @keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}
                    @keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}
    </style>
</head>
<body>
    
<?php
include 'db.php';
session_start();
$id=$_SESSION['i'];
$first= $_SESSION['first'];
$first1= $_SESSION['first1'];
$first2= $_SESSION['first2'];
$first3= $_SESSION['first3'];
//echo $first,$first1,$first2,$first3;
// echo "<br>";
$s1="SELECT * FROM `options` where coption='$first'";
$qu=mysqli_query($conn,$s1);
$va=mysqli_fetch_assoc($qu);
$v=$va['id'];
//echo $v;


$s2="SELECT * FROM `options` where coption='$first1'";
$qu1=mysqli_query($conn,$s2);
$va1=mysqli_fetch_assoc($qu1);
$v1=$va1['id'];
//echo $v1;


$s3="SELECT * FROM `options` where coption='$first2'";
$f1=mysqli_query($conn,$s3);
$f1=mysqli_fetch_assoc($f1);
$v3=$f1['id'];
//echo $v3,"<br>";

$ss4="SELECT * FROM `options` where coption='$first3'";
$ff2=mysqli_query($conn,$ss4);
$ff=mysqli_fetch_assoc($ff2);
$v4=$ff['id'];
//echo $v4,"<br>";




//echo $v;
    # codeb
    $que=$_GET['ques'];
    $op1=$_GET['op1'];
    $op2=$_GET['op2'];
    $op3=$_GET['op3'];
    $op4=$_GET['op4'];
  //  echo $op1,"<br>",$op2,"<br>",$op3,"<br>",$op4;
    $uu="UPDATE `questions` SET `question_text` = '$que' WHERE `questions`.`question_number` = '$id';";
    mysqli_query($conn,$uu);

    $u11="UPDATE `options` SET `coption` = '$op1 ' WHERE `options`.`id` = '$v';";
    $u2="UPDATE `options` SET `coption` = '$op2 ' WHERE `options`.`id` = '$v1';";
    $u3="UPDATE `options` SET `coption` = '$op3 ' WHERE `options`.`id` = '$v3';";
    $u4="UPDATE `options` SET `coption` = '$op4 ' WHERE `options`.`id` = '$v4';";


    mysqli_query($conn,$u11);
    mysqli_query($conn,$u2);
    mysqli_query($conn,$u3);
    mysqli_query($conn,$u4);


  //  header("location:edite.php");



//echo $op1;
$arr=array();
array_push($arr,$op1);
array_push($arr,$op2);
array_push($arr,$op3);
array_push($arr,$op4);

   // echo $arr["$value"];
  // echo "$value";

//$sele="SELECT * FROM `options` where question_number='$id'";
//$q=mysqli_query($conn,$sele);
//while($ro=mysqli_fetch_assoc($q)){
   // echo $r['coption'];

//    foreach($arr as $value){
//     $i=$v;
//     echo $value;
//    $u1="UPDATE `options` SET `coption` = '$value ' WHERE `options`.`id` = '$i';";
//   $i++;
// }
//}
// $qa=mysqli_query($conn,$u1);
    
//     //echo $que;
//      $u="UPDATE `questions` SET `question_text` = '$que' WHERE `questions`.`question_number` = '$id';";
//      $do=mysqli_query($conn,$u);
    
//      if ($do) {
//          # code...
//         // header("location:edite.php");
//      }
//      else{
//          echo "not";
//      }

?>
<br><br><br><br><br>
<center>
<div class="wrapper">
     <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
          <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
    <h1>Done</h1>
        </svg>
</center>
<script>
let audio = new Audio("sound.mp3");
    audio.play()
    var i =0;text;
</script>

</body>
</html>



