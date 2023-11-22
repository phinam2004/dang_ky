<?php
// Thay đổi các thông tin kết nối dựa trên cấu hình của bạn
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "dang_ky";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra xem mật khẩu có khớp không
    if ($password !== $confirm_password) {
        echo "Mật khẩu không khớp. Vui lòng nhập lại!";
    } else {
        // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng tài khoản
        $sql = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Đăng ký tài khoản thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Đóng kết nối
$conn->close();
?>