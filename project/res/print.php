<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->


	<style>
		body{
		background:gray;
		}
		.container{
            
            border-radius:9px;
			border:2px solid black ;
			width: 80%;
			padding:20px;
            background-color:white;
		}
        input{
            margin:10px;
            padding:10px;
            font-size:18px;
        }
        input[type="button"]:hover{
            background-color:gray;
            color:white;
          
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
        input[type="button"]{
            margin-left:90%;
        }
        tr,th{
            padding: 15px;;
            font-size:40px;
        }
	</style>
</head>
<body>
<?php
include '../db.php';




?>
<input type="button" onclick="location.href = 'form.html'" value="admin">
<br><br><br><br><br>
<center>

    </header>
    <main>
        
        <div class="container">
        <h1>Result <br>
        <!-- <a style="font-size: 20px;" href="res/index.php">result</a> -->
        <hr>
        
        <!-- <strong>No of Questions :</strong> <?php //echo $total  ?></h1><hr> -->
          <?php
          $role=$_GET['sub'];
            $new="SELECT * FROM student where role='$role'";
            $q=mysqli_query($conn,$new);
            $new = mysqli_fetch_assoc($q);
          ?>
           
                <table border="1px">
                    <tr>
                        <th>ROLE NUMBER:</th>
                        <td><?php echo $new['role']; ?></td>
                    </tr>
                    <tr>
                        <th>NAME:</th>
                        <td><?php echo $new['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Personal ID:</th>
                        <td><?php echo $new['id']; ?></td>
                    </tr>
                    <tr>
                        <th>DATE OF TEST:</th>
                        <td><?php echo $new['date']; ?></td>
                    </tr>
                </table>
              
<h2>Number of Question <?php echo $new['total']; ?></h2>
<h2>Obtained <?php echo $new['sc']; ?></h2>
total persantage  
<?php 
$sum=($new['sc']/ $new['total'])*100;
echo $sum;
?>%
<hr>
<?php
if ($sum <=33) {
    # code...
    echo "fall try next time";
}
else{
    echo "passed";
}
?>          
        </div></center>
</body>
</html>