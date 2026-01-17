<?php
require_once 'db_connect.php';

// 1. Lấy dữ liệu
$stmt = $conn->prepare("SELECT * FROM students");
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Danh sách sinh viên</h2>
<table border="1" cellpadding="10" style="border-collapse: collapse; width: 80%;">
    <thead>
        <tr style="background: #f2f2f2;">
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $sv): ?>
        <tr>
            <td><?php echo $sv['id']; ?></td>
            <td><?php echo $sv['fullname']; ?></td>
            <td><?php echo $sv['student_code']; ?></td>
            <td><?php echo $sv['email']; ?></td>
            <td>
                <a href="#">Sửa</a> | <a href="#" style="color:red;">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>