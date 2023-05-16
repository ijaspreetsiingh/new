<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

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
$a=$_GET['id'];
//echo $a;
$op=array();
$sel="SELECT * FROM `options` where question_number='$a'";
$qu=mysqli_query($conn,$sel);
while ($ro=mysqli_fetch_assoc($qu)) {
    # code...
    array_push($op,$ro['question_number']);
   // echo $ro['question_number'];
}
$op1=$op[0];
$op2=$op[1];
$op3=$op[2];
$op4=$op[3];
// $del="DELETE FROM `options` WHERE `options`.`id` = $op1";
// mysqli_query($conn,$del);
// $del1="DELETE FROM `options` WHERE `options`.`id` = $op2";
// mysqli_query($conn,$del1);
// $del2="DELETE FROM `options` WHERE `options`.`id` = $op3";
// mysqli_query($conn,$del2);
// $del3="DELETE FROM `options` WHERE `options`.`id` = $op4";
// mysqli_query($conn,$del3);
// $del4="DELETE FROM `questions` WHERE `questions`.`id` = $a";
// mysqli_query($conn,$del4);
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
</script>


</script>

</body>
</html>