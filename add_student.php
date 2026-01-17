<!DOCTYPE html>
<html>
<head><title>Thêm sinh viên</title></head>
<body>
    <form method="POST">
        Họ tên: <input type="text" name="fullname" required><br>
        Mã SV: <input type="text" name="student_code" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit" name="btn_add">Thêm mới</button>
    </form>

    <?php
    if (isset($_POST['btn_add'])) {
        require_once 'db_connect.php';
        
        $name = $_POST['fullname'];
        $code = $_POST['student_code'];
        $mail = $_POST['email'];

        
        $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt->execute([$name, $code, $mail])) {
            echo "<p style='color:green;'>Thêm sinh viên thành công!</p>";
        }
    }
    ?>
</body>
</html>