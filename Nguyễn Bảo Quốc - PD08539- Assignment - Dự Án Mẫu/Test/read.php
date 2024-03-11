<?php
    include 'connect.php';
    // truy vấn danh sách các sản phẩm
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    $dem = 0;
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sản phẩm</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align:center;

        }

        a {
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 100px;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <a href="create.php">Thêm sản phẩm mới</a>
    <br>
    <br>
    <a href="Shopee demo.php">Trang chủ</a> 
    <table>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
           
        </tr>
        <?php
        // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
        while ($row = mysqli_fetch_assoc($result)){
            $dem = $dem + 1;
            echo "<tr>";
            echo "<td>" .$dem ."</td>";
            echo "<td>" .$row['id'] ."</td>";
            echo "<td>" .$row['namepro'] ."</td>";
            echo "<td><img src=".$row['image_url']."></td>";
            echo "<td>" .$row['gia'] . "</td>";
            echo "<td>";
            echo " <a href='update.php?id=" . $row['id'] ."'>Sửa</a> ";
            echo "</td>";
            echo "<td>";
            echo " <a href='delete.php?id=" . $row['id'] ."'>Xóa</a> ";
            echo "</td>";
            echo "</tr>";
        }
        ?>
       
    </table>
</body>
</html>

<?php
//đóng kết nóii
mysqli_close($conn);
?>