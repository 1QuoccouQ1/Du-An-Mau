<?php
include('connect.php');
// xử lý yêu cầu đăng kí khi đẩy form
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // kiểm tra người dùng đã tồn tại hay chưa
    $check_query = "SELECT *FROM client WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $message = "tài khoản đã đăng kí";
    } else {
        // thêm tài khoản vào cơ sở dữ liệu
        $insert_query = "INSERT INTO client (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_query) == TRUE) {
            $message = 'Thành công ';
        } else {
            $message = "thất bại";
        }
    }
}

// đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="./res.css">
    </head>

    <body>
    <form class="modal-main-register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" >
              <div class="main-top">
                <div class="main-top-left">Đăng Ký</div>
                <div class="main-top-right">Đóng</div>
              </div>
              <div class="main-body">
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
                    id="pass"
                    name="pass"
                    class="main-body-input"
                    placeholder="Mật khẩu của bạn"
                    required
                  />
                  <input
                    type="password"
                    id="confim"
                    name="confim"
                    class="main-body-input"
                    placeholder="Nhập lại mật khẩu"
                    required
                  />
                </div>
                <div class="main-body-title">
                  <span class="main-body-title-1">
                    Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                    <span style="color: red; cursor: pointer">
                      Điều khoản dịch vụ
                    </span>
                    &
                    <span style="color: red; cursor: pointer"
                      >Chính sách bảo mật</span
                    >
                  </span>
                </div>
                <div class="main-body-bottom">
                  <a href="/Shopee demo.php" class="main-body-bottom-left">TRỞ LẠI</a>
                  <button type="submit" class="main-body-bottom-right">ĐĂNG KÝ</button>
                  
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