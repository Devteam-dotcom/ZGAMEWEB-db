<?php
include 'config.php';  // เชื่อมต่อฐานข้อมูล
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZgameStoreshop - หน้าแรก</title>
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
                <li><a href="#">หน้าแรก</a></li>
                <li><a href="shop.php">ร้านค้า</a></li>
                <li><a href="#">ดาวน์โหลดเกม</a></li>
                <li><a href="#">บัญชี</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Section -->
    <section class="main-section">
        <h1>ยินดีต้อนรับสู่ ZgameStoreshop</h1>
        <p>ที่นี่คุณจะพบกับเกมและอุปกรณ์เกมมิ่งที่ดีที่สุด</p>
    </section>

    <!-- Featured Lists -->
    <section class="featured-lists">
        <h2>รายการเกม</h2>

        <!-- เกมมาแรง -->
        <div class="list">
            <h3>เกมมาแรง</h3>
            <div class="list-items">
                <?php
                // ดึงข้อมูลสินค้าจากฐานข้อมูล
                $sql = "SELECT * FROM products WHERE category = 'เกมมาแรง' LIMIT 4";  // แสดงเกมมาแรง 4 รายการ
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product-card'>";
                        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                        echo "<h3>" . $row["name"] . "</h3>";
                        echo "<p>" . $row["description"] . "</p>";
                        echo "<button>ดูเพิ่มเติม</button>";
                        echo "</div>";
                    }
                } else {
                    echo "ไม่มีสินค้าสำหรับแสดง";
                }
                ?>
            </div>
        </div>

        <!-- กำลังจะมีงาน -->
        <div class="list">
            <h3>กำลังจะมีงาน</h3>
            <div class="list-items">
                <?php
                // ดึงข้อมูลสินค้าจากฐานข้อมูล
                $sql = "SELECT * FROM products WHERE category = 'กำลังจะมีงาน' LIMIT 4";  // แสดงเกมที่กำลังจะมีงาน
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product-card'>";
                        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                        echo "<h3>" . $row["name"] . "</h3>";
                        echo "<p>" . $row["description"] . "</p>";
                        echo "<button>ดูเพิ่มเติม</button>";
                        echo "</div>";
                    }
                } else {
                    echo "ไม่มีสินค้าสำหรับแสดง";
                }
                ?>
            </div>
        </div>

        <!-- อยู่ในช่วงอัพเดท -->
        <div class="list">
            <h3>อยู่ในช่วงอัปเดท</h3>
            <div class="list-items">
                <?php
                // ดึงข้อมูลสินค้าจากฐานข้อมูล
                $sql = "SELECT * FROM products WHERE category = 'อยู่ในช่วงอัพเดท' LIMIT 4";  // แสดงเกมที่อยู่ในช่วงอัพเดท
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='product-card'>";
                        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                        echo "<h3>" . $row["name"] . "</h3>";
                        echo "<p>" . $row["description"] . "</p>";
                        echo "<button>ดูเพิ่มเติม</button>";
                        echo "</div>";
                    }
                } else {
                    echo "ไม่มีสินค้าสำหรับแสดง";
                }
                ?>
            </div>
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
