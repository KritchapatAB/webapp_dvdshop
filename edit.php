<?php
if(!isset($_GET['id'])){
    header("refresh: 0; url=http://localhost/EIEI/step2
    .php");
}
require 'step1.php';
$sql = "SELECT * FROM member WHERE id='$_GET[id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsucc.php">
        <p>
            <label for="sid">รหัส</label>
            <input type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input type="text" name="id" id="id" value="<?=$row['id'];?>" />
        </p>
        <p>

            <label for="firstname">ชื่อ</label>
            <input type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input type="text" name="firstname" id="firstname" value="<?=$row['firstname'];?>" />

        </p>

        <p>

            <label for="lastname">นามสกุล</label>

            <input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label for="phone">เบอร์โทร</label>

            <input type="text" name="phone" id="phone" value="<?=$row['phone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='step2.php'>Home</a>
    </form>
</body>

</html>
