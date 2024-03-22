<?php
    session_start();
    ob_start();
    include("../model/connect.php");
    include("../model/connect.php");

    // kiem tra nut dang nhap phia duoi da ton tai hay chua vaf duo click haychuwa
    if((isset($_POST["dangnhap"])) && ($_POST["dangnhap"])){
        $user = $_POST['$user'];
        $pass = $_POST['$pass'];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
<div class="main">
    <h2>
        lOGIN
    </h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name ="user" id="">
        <input type="text" name ="pass" id="">
        <input type="submit" name ="dangnhap" value="dang nhap">
    </form>
</div>
</body>
</html>