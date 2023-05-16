<?php
include 'db.php';
session_start();
//set Q. NO
$number = $_GET['n'];

//Query for question
$query = "SELECT * from questions WHere question_number=$number";
$result = mysqli_query($conn, $query);
$question = mysqli_fetch_assoc($result);

//Get option

$query = "SELECT * from options WHere question_number=$number";
$choices = mysqli_query($conn, $query);

//Get Total Q.NO
$sub1=$_SESSION['sub1'];
$query1 = "Select * from questions where sub='$sub1'";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);
$aaa=$question['question_text'];
$_SESSION['que']=$aaa;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <style>
		body{
		background:gray;
		}
		.container{
            border-radius:9px;
			border:2px solid black ;
			width: 70%;
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
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            font-size:20px;
            font-family: Arial, Helvetica, sans-serif;
        }
	</style>
    
</head>

<body>
    <header>

    </header>
    <main><br><br><br><br><br><br>
        <center>
        <div class="container">
        <h1>Your Test Start Now
            <div class="current">
              Total  Question <?php //echo $number ?> <?php echo $total ?>
            </div></h1><hr>
            <h2><?php "." ?> <?php echo  $question['question_text']; ?></h2>
            <form method="POST" action="take.php">
                
                    <?php while ($row = mysqli_fetch_assoc($choices)) { ?>
                        <input type="radio" name="choice" value="<?php echo $row['id'] ?>"><?php echo $row['coption'] ?>
                    <?php } ?>
                <br><br>
                <input type="hidden" name="number" value="<?php echo $number ?>">
                <input type="submit" name="submit" value="Next">
            </form>
        </div>
        <?php
        $_SESSION['total']=$total;
        ?>
    </main>
    </center>

</body>

</html>