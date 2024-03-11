<?php
include('connect.php');
// xử lý yêu cầu đăng kí khi đẩy form
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // LẤY THÔNG TIN TỪ FORM
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $email = $_POST["email"];

    // kiểm tra người dùng đã tồn tại hay chưa
    $check_query = "SELECT *FROM user WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $message = "tài khoản đã đăng kí";
    } else {
        // thêm tài khoản vào cơ sở dữ liệu
        $insert_query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
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
    <link rel="stylesheet" href="./css/register.css">
    </head>

    <body>
        <div class="tong">
            <div class="login-box">
                <p>Sign up</p>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                    
                    <div class="user-box">
                    <input required="" name="username" id="username" type="text" placeholder="Your Name" >
                    
                    </div>
                    <div class="user-box">
                    <input required  name="email" id="email" type="text" placeholder="Your Email">
                    </div>
                    <div class="user-box">
                    <input required name="pass" id="pass" type="password" placeholder="Password">
                    </div>
                    <div class="user-box">
                    <input required name="confirm" id="confirm" type="password" placeholder="Repeat your Password">
                    </div>
                    <div class="check-box">
                    <label>
                        <input name="check" id="check" type="checkbox" require>
                        I agree all statement in <a href="">Terms of service</a></label>
                    </div>
                    <input type="submit" class="click" value="Register">
                </form>
                <p class="message">Don't have an account? <a href="./login.php" class="a2">Sign up!</a></p>
                <span><?php echo $message; ?></span>
                </div>
            
        </div>
    </body>

</html>