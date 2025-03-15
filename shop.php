<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZgameStoreshop - ร้านค้า</title>
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

    <!-- Main Section -->
    <section class="shop-section">
        <h1>รายการสินค้าในร้าน</h1>
        <div class="product-list">
            <?php
            // ดึงข้อมูลสินค้าจากฐานข้อมูล
            $sql = "SELECT * FROM products LIMIT 10";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                    echo "<h3>" . $row["name"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<a href='product-detail.php?id=" . $row["id"] . "'>ดูรายละเอียด</a>";
                    echo "</div>";
                }
            } else {
                echo "ไม่มีสินค้าสำหรับแสดง";
            }
            ?>
        </div>
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
