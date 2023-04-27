<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="table.css"  rel="stylesheet">
</head>

<body>
    <center> <br><br><br><br><br><br>
    <table  class="content-table">
        <?php
        include 'db.php';
        $query = "SELECT *from questions";
        $data = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($data)) {
        ?>

            <tr class="active-row">
                <td><?php
                    $question = $row['question_number'];
                    echo $row['question_number'] ?></td>
                <td><?php echo $row['question_text'] ?></td>
                <?php
                $query1 = "SELECT * from options WHere question_number='$question'";
                $data1 = mysqli_query($conn, $query1);
                while ($row1 = mysqli_fetch_assoc($data1)) {
                ?>
                    <td><?php echo $row1['coption'] ?></td>
                <?php
                }
                ?>
            </tr>

        <?php
        }
        ?>
    </table>

    <button class="butt"><a class="btt1"  href="index.php"> LOGIN</a></button>
</body>

</html>