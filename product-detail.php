<?php
include 'config.php';
$id = $_GET['id'];  // รับค่า id จาก URL

// ดึงข้อมูลสินค้าจากฐานข้อมูล
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสินค้า</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="ZgameStoreshop">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="shop.php">ร้านค้า</a></li>
                <li><a href="#">ดาวน์โหลดเกม</a></li>
                <li><a href="#">บัญชี</a></li>
            </ul>
        </nav>
    </header>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <h1><?php echo $product["name"]; ?></h1>
        <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
        <p><?php echo $product["description"]; ?></p>
        <p>ราคา: <?php echo $product["price"]; ?> บาท</p>
        <button>ซื้อสินค้า</button>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 ZgameStoreshop. สงวนลิขสิทธิ์</p>
    </footer>
</body>
</html>

<?php
$conn->close();  // ปิดการเชื่อมต่อฐานข้อมูล
?>
