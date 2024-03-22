<?php
    include "connect.php";
    include "view/header.php";

    if (isset($_GET["act"])) {
        switch ($_GET["act"]) {
            case "danh muc":
                $kq = gettalldm();
                include "view/danhmuc.php";
                break;
            case "sanpham":
                $kq = gettalldm();
                include "view/sanpham.php";
                break;
            case "taikhoan":
                $kq = gettalldm();
                include "view/taikhoan.php";
                break;
            case "donhang":
                $kq = gettalldm();
                include "view/donhang.php";
                break;  
            default:
            include "view/home.php";              
        }

    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <
</body>
</html>