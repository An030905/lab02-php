<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Đăng Ký - POST</title>
</head>
<body>
    <h2>Đăng ký tài khoản</h2>
    <form action="" method="post">
        <label>Tên đăng nhập:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Mật khẩu:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Đăng ký</button>
    </form>

    <?php
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        echo "<h3>Đã nhận thông tin của: $username</h3>";
    }
    ?>
</body>
</html>