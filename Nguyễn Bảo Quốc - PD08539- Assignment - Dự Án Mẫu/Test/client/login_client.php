
<?php

    include('connect.php');
    session_start();
    $message ="";

    // Kiểm tra nút Đăng nhập đã được nhấn hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Lấy thông tin người dùng từ form đăng nhập
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo $password;/

        // Xây dựng truy vấn SQL
        $query = "SELECT * FROM client WHERE username='$username' ";

        // Thực thi truy vấn
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả trả về
        if(mysqli_num_rows($result) > 0){

            // Lấy thông tin người dùng từ cơ sở dữ liệu
            $row = mysqli_fetch_assoc($result);
            // Kiểm tra mật khẩu hợp lệ
            if($row['password']===$password){
            // Đăng nhập thành công và set user name vào biến session
            $_SESSION["user"] = "$username";
            header("Location: /read.php");
            
            } else {
                // sai mk
                echo "Sai mật khẩu. Vui lòng thử lại";
            }
        } else {
             // Người dùng không tồn tại
            echo "Người dùng không tồn tại!";
        }
    }
   
    
        // Đóng kết nối

    mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>

<form class="modal-main-login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="main-top" >
                <div class="main-top-left">Đăng Nhập</div>
                <div class="main-top-right-login">Đóng</div>
              </div>
              <div class="main-body-login">
                <div class="main-body-top">
                  <input
                    type="text"
                    id="username"
                    name="username"
                    class="main-body-input"
                    placeholder="Tài khoản của bạn"
                    required
                  />
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="main-body-input"
                    placeholder="Mật khẩu của bạn"
                    required
                  />
                </div>
                <div class="main-body-title-help">
                  <span
                    class="main-body-title-help-left hear--list-left-item--separate-1"
                    >Quên mật khẩu</span
                  >
                  <span style="cursor: pointer">Cần trợ giúp?</span>
                </div>
                <div class="main-body-bottom">
                  <a href="/Shopee demo.php" class="main-body-bottom-left">TRỞ LẠI</a>
                  <button type="submit" class="main-body-bottom-right"
                  >ĐĂNG NHẬP</button>
                </div>
              </div>
              <div class="main-bottom">
                <div class="main-bottom-div-left">
                  <i class="fa-brands fa-square-facebook main-bottom-div-icon"></i>
                  <div class="main-bottom-div-title">Kết nối với Facebook</div>
                </div>
                <div class="main-bottom-div-right">
                  <i class="fa-brands fa-google main-bottom-div-icon"></i>
                  <div class="main-bottom-div-title">Kết nối với Google</div>
                </div>
              </div>
             </form>
</body>

</html>