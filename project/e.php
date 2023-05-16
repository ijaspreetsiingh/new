<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
  <style>
    body{
      background-color:grey;
    }
    form{
      padding:10px;
      background-color:white;
      border:2px solid black;
      width: 70%;
      border-radius:10px;
    }
    input{
      padding:10px;
      font-size:20px;
      width: 60%;;
    }
    input[type="submit"]{
      padding:10px;
      font-size:20px;
      width: 50%;;
    }
    input[type="submit"]:hover{
background-color:transparent;
color:grey;
    }
    h1{
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h2{
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      font-size:18px;
      margin:4px;
    }

  </style>
</head>
<body>
<main>
			<div class="head-title">
				<div class="left">
				
					
				</div>
			</div>



			<div class="table-data">
				<!-- <div class="order"> -->
	
				<?php
 $idd=$_GET['idd'];
   include 'db.php';
   $s="SELECT * FROM `questions` where question_number='$idd'";
   $qq=mysqli_query($conn,$s);
   $ro=mysqli_fetch_assoc($qq); 
   $option=array();






  // $u="UPDATE `student` SET `name` = 'aa' WHERE `student`.`id` = 1;";
  $idd=$_GET['idd'];
	session_start();
  $sel = "SELECT * from options WHere question_number='$idd'";
  $q=mysqli_query($conn,$sel);
  while($row=mysqli_fetch_assoc($q)){
    array_push($option,$row['coption']);
  
  }
   //echo $option[1]; 
$first=$option[0];
$first1=$option[1];
$first2=$option[2];
$first3=$option[3];
$_SESSION['first']=$first;
$_SESSION['first1']=$first1;
$_SESSION['first2']=$first2;
$_SESSION['first3']=$first3;


//echo $option[0];
?>
<br><br><br><br>
  <center>
<form action="n.php" >

<h1>
  Update
</h1>
<hr>
<?php
$query2 = "SELECT * from options WHere question_number='$idd' && is_correct='1'";
$data2 = mysqli_query($conn, $query2);
$r = mysqli_fetch_assoc($data2);
$ans= $r['coption'];

?>
<h2>Question</h2>
<input type="text" name="ques" value="<?php echo $ro['question_text']?> ">
<h2>Option 1</h2>
<input type="text" name="op1" value="<?php echo $option[0]; ?>" id="op1">
<h2>Option 2</h2>
<input type="text" name="op2" value="<?php echo $option[1];?>" id="op2">
<h2>Option 3</h2>
<input type="text" name="op3" value="<?php echo $option[2]; ?>" id="op3">
<h2>Option 4</h2>
<input type="text" name="op4" value="<?php echo $option[3];  ?>" id="op4">
<h2>Correct Answer :</h2>
<input type="text" style="background-color:green;" id="ans" name="" value="<?php echo $r['coption']; ?>" id=""><br><br>
<input type="submit" class="button" name="submit" value="submit"> <br><br>

</form>

</center>




<?php


$id=$_GET['idd'];
// echo $id;
$_SESSION['i']=$id;

?>
<!-- <h6 id="an"></h6> -->
<script>
 var a=  document.getElementById['an'].value;
 //let op1=  document.getElementById['op1'].value;
alert(a);
</script>
<script>
let audio = new Audio("sound1.mp3");
    audio.play()
    var i =0;text;

</script>

</body>

</html>




