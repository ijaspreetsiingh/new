<?php
include 'db.php';

$query1 = "Select * from questions";
$questions = mysqli_query($conn, $query1);
$total = mysqli_num_rows($questions);





?>



<html>
    <head>
        <title>Login Page</title>
        <style>
            body{
                background:black;
            }
            
.center{
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
}
.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}

.center form{
    padding: 0 40px;
    box-sizing: border-box;
}
form .text1{
    position: relative;
    border-bottom: 2px solid silver;
    margin: 30px 0;
}

.text1 input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.text1 label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;

}

.text1 span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2691d9;
}
.text1 input:focus ~ label,
.text1 input:valid ~ label{
    top: -5px;
    color: #2691d9;
}

.text1 input:focus ~ span::before,
.text1 input:valid ~ span::before{
    width: 100%;
}

.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}

input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}

input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}

.butt{ 
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    text-decoration: none;
   margin-left:60px;

}
.btt1{ width: 100%;
    height: 50px;
    
    background: #2691d9;
    
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    text-decoration: none;

}


.butt:hover{
    border-color: #2691d9;
    transition: .5s;
}

.signup{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}

.signup a{
    color: #2691d9;
    text-decoration: none;
}
.signup a:hover{
    text-decoration: underline;
    
}
.jass{
    width: 100px;
}
        </style>
    </head>
<body>

    
   
    <div class="center">
    <h1>Hii.. 
        <?php
        session_start();
        echo $_SESSION['per'];
        ?>
    </h1>
    
  

        <button style="width: 280px;" class="butt" onclick="window.location.href = 'add.php';">ADD QUESTIONS</a></button>
   
   <br> <br>

        <button style="width: 280px;" class="butt" onclick="window.location.href = 'index.php';">Your Data</a></button>
        <br> <br>
    <!-- <div class="pass">Forgot Password</div> -->

    <button style="width: 280px;" class="butt" onclick="window.location.href = 'index.html';">Delete</a></button>
    
    <br><br><br>
</div>


<div class="count">
    <input type="color" name="" id="clr">
    <br><br>
    <div class="jass">
    <input  type="submit" onclick="jass()" name="" id=""></div>
</div>


<script>
function jass(){
    let a = document.getElementById('clr').value;
    document.body.style.backgroundColor=a;
}
</script> 

</body>
</html>