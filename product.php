<?php
    include ("product.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <thead>
        <tr>
            <th class="ID"></th>
            <th class="----Ten----"></th>
            <th class="----hinh anh-----"></th>
            <th class="----gia----"></th>
            <th class="bao hanh"></th>
        </tr>
    </thead>
    <tbody>
        <?php
             $sql = "SELECT * FROM sanpham";
              $result = mysqli_query($conn,$sql);

              while($row=mysqli_fetch_array($result)){
        ?>
        <br>
        <tr>
            <td><?php  echo $row['id']?></td>
            <td><?php  echo $row['name']?></td>
            <td><img src="img/product/<?php echo $row['image']?>" alt="hinh anh ipphone 1"></td>
            <td><?php  echo $row['price']?></td>
            <td><?php  echo $row['warranty']?></td>
        </tr>
        <?php } ?>

    </tbody>
</body>

</html>