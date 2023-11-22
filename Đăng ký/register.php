<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra xem mật khẩu có khớp không
    if ($password !== $confirm_password) {
        echo "Mật khẩu không khớp. Vui lòng nhập lại!";
    } else {
        // Xử lý lưu thông tin tài khoản vào cơ sở dữ liệu hoặc tập tin
        // Ở đây chỉ in ra để minh họa
        echo "Đăng ký tài khoản thành công!";
        echo "<br>";
        echo "Tên đăng nhập: " . $username;
        echo "<br>";
        echo "Mật khẩu: " . $password;
    }
}
?>