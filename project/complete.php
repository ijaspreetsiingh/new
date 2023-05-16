<?php
session_start();
$sc=$_SESSION['score'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
		body{
		background:gray;
		}
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
h2{
    margin-left:-900%; 
}
#btn{
    margin-left:-900%; 
}

	</style>
</head>

<body>
    
<center><br><br><br><br><br><br><br><br>
    <main> <div class="container"><br><br>
    <div class="wrapper">
         <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
             <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
              <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
    </svg>
   
    <br><br>


       
            <h1 id="text"></h1> <hr>
            <h2 id="h2">Your Score is <?php echo $_SESSION['score']; ?> Out of <?php echo $_SESSION['total'];?></h2>
            <?php unset($_SESSION['score']); ?>
           <a id="aa" href="index.php">Home</a>
        </div></div>
    </main>
    </center>
<?php
$conn=mysqli_connect("localhost","root","","quizz");
   $stu=$_SESSION['stu'];
   $role=$_SESSION['role'];
   $total= $_SESSION['total'];
  // $total=$_SESSION['total'];
   $in="INSERT INTO `student` (`id`, `name`, `role`, `sc`, `total`, `date`) VALUES (NULL, '$stu', '$role', '$sc', '$total', 'current_timestamp()');";
    $q=mysqli_query($conn,$in);
?>

    <script>
let audio = new Audio("sound.mp3");
    audio.play()
    var i =0;text;

text = "Done";

function typing(){

    if(i<text.length){
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setTimeout(typing,50);
    }


  }
  typing();



setTimeout( tim ,800);
function tim(){

    var a=document.getElementById("h2");
    a.style.marginLeft="0px";
    var b=document.getElementById("btn");
    b.style.marginLeft="0px";

}
</script>

</body>

</html>