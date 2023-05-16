<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: grey;
        }
        .h{
           color:white;
            font-size:40px;
        }
        button{
            padding:10px;
            background:green;
            color:black;
            border-radius:15%;
        }
        button:hover{
            background:black;
            color:white;
        }
        .count{
            margin-top:10%;
            width: 85%;;
            padding:20px;
            font-size:30px;
          border-radius:10px;
          background-color:white;
        }
        input[type="submit"]{
            margin-top:90px;
            padding:10px;
            background:white;
            color:black;
           
        }
    </style>
</head>
<body>
    <!-- <button onclick="window.location.href = 'dashbord.php';">back</button>
     -->
<marquee behavior="" direction="">

<h1 class="h">Hello Admin

<?php
session_start();
echo $_SESSION['per'];
$na=$_SESSION['per'];
$conn=mysqli_connect("localhost","root","","quizz");
$sel="SELECT * FROM `admin` where name='$na'";
$new=mysqli_query($conn,$sel);
$row=mysqli_fetch_assoc($new);
$em = $row['email'];
$ph = $row['phone'];
?>
</h1>

</marquee>

<center>
<div class="count">
<table border=1px>


<tr>
<h1 >Your data</h1><hr>
    <th>id</th>
    <th>Name</th>
    <th>Password</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>
  <tr>
    <td><?php echo "1"; ?></td>
    <td><?php echo  $_SESSION['per']; ?></td>
    <td><?php echo  $_SESSION['pas']; ?></td>
    <td><?php echo $em; ?></td>
    <td><?php echo $ph; ?></td>
  </tr>
</table>
</center>
</div>

    <input type="color" name="" id="clr">
    <input type="submit" value="color" onclick="jass()" name="" id="">

<script>
function jass(){
    let a = document.getElementById('clr').value;
    document.body.style.backgroundColor=a;
}
</script>    

</body>
</html>


