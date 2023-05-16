<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confume</title>
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
    $id=$_SESSION['sess'];
    $del="DELETE FROM student WHERE `student`.`id` = $id";
    $done=mysqli_query($conn,$del);
    if ($done) {
        # code...
       // header("location:allcon.php");
?>








<br><br><br><br><br>
<center>
<div class="wrapper">
     <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
          <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
    <h1>Done</h1>
    <a href="dashbord.php   ">back</a>
        </svg>
</center>
<script>
let audio = new Audio("sound.mp3");
    audio.play()
    var i =0;text;

</script>

    <?php
    }
    else {
        # code...
        echo "Not Done";
    }
    ?>
</body>
</html>




