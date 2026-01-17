<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Tìm Kiếm - GET</title>
</head>
<body>
    <h2>Tìm kiếm sản phẩm</h2>
    <form action="" method="get">
        <input type="text" name="keyword" placeholder="Nhập từ khóa..." required>
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php
    
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']); 
        echo "<h3>Bạn đang tìm kiếm từ khóa: $keyword</h3>";
    }
    ?>
</body>
</html>