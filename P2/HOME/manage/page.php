<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนอนุบาลกุลจินต์</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #FB6F92; /* Pink primary color */
            --secondary: #FCE4EC; /* Light pink background */
            --accent: #FFBCCD; /* Accent color for hover effects */
            --text: #2C3E50; /* Dark text color */
            --light: #ffffff; /* White for text on dark backgrounds */
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Prompt', sans-serif;
            color: var(--text);
            line-height: 1.6;
            background: #B8DFFD;
        }

        .header {
            background-color: #FB6F92;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 4px 19px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .title {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 80px; /* ขนาดของโลโก้ */
            height: auto;
            margin-bottom: 10px; /* ระยะห่างระหว่างโลโก้กับข้อความ "เข้าสู่ระบบ" */
        }
        
        .nav {
            display: flex;
            justify-content: flex-end;
            gap: 15px; /* เว้นระยะห่างระหว่างปุ่ม */
        }

        .nav a {
            color: white;
            background-color: #FF9BB4; /* พื้นหลังของปุ่ม */
            padding: 10px 20px; /* เพิ่มระยะห่างภายในปุ่ม */
            margin-left: 10px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 25px; /* ทำให้ปุ่มโค้งมน */
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้ปุ่ม */
        }

        .nav a:hover {
            background-color: #FFBCCD; /* เปลี่ยนสีเมื่อ hover */
            transform: translateY(-2px); /* ยกปุ่มขึ้นเล็กน้อยเมื่อ hover */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* เพิ่มเงาเมื่อ hover */
        }

        .main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .category-card {
            background: var(--light);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-decoration: none;
            color: var(--text);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .category-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .category-content {
            padding: 1.5rem;
        }

        .category-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .category-description {
            font-size: 0.9rem;
            color: #666;
        }

        .footer {
            background: var(--primary);
            color: var(--light);
            padding: 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .categories {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<body>
    <div class="header">
        <div class="title">
        <img src="logo.png" alt="Logo" class="logo">
            โรงเรียนอนุบาลกุลจินต์
        </div>
        <div class="nav">
            <a href="/P2/HOME/home.php">เพิ่มข่าวสารใหม่</a>
            <a href="/P2/CRUD/home.php">จัดการผู้ใช้งาน</a>
            <a href="/P2/logout.php">ออกจากระบบ</a>
        </div>
    </div>

    <main class="main">
        <div class="categories">
            <a href="/P2/HOME/manage/academic.php" class="category-card">
                <img src="https://www.kunlajin-hy.com/V3/event_pic/56-09-19/064.jpg" alt="งานวิชาการ" class="category-image">
                <div class="category-content">
                    <h2 class="category-title">งานวิชาการ</h2>
                    <p class="category-description">การบริหารงานวิชาการเป็นงานที่สำคัญสำหรับผู้บริหารสถานศึกษา เน้นการปรับปรุงคุณภาพการเรียนการสอนเพื่อความสำเร็จของสถานศึกษา</p>
                </div>
            </a>

            <a href="/P2/HOME/manage/train.php" class="category-card">
                <img src="https://www.kunlajin-hy.com/V3/event_pic/60_07_18_20/003.jpg" alt="อบรม/สัมมนา" class="category-image">
                <div class="category-content">
                    <h2 class="category-title">อบรม/สัมมนา</h2>
                    <p class="category-description">การจัดอบรมและสัมมนาเพื่อเสริมสร้างความรู้และทักษะที่จำเป็นสำหรับบุคลากรและนักเรียน</p>
                </div>
            </a>

            <a href="/P2/HOME/manage/activity.php" class="category-card">
                <img src="http://www.kunlajin-hy.com/V3/event_pic/58-01-29/049.jpg" alt="กิจกรรม" class="category-image">
                <div class="category-content">
                    <h2 class="category-title">กิจกรรม</h2>
                    <p class="category-description">กิจกรรมสร้างสรรค์ต่างๆ ที่จัดขึ้นเพื่อพัฒนาทักษะและส่งเสริมการเรียนรู้ในทุกๆ ด้านของนักเรียน</p>
                </div>
            </a>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>1 ถนนรณภูมิ ตำบลหาดใหญ่ อำเภอหาดใหญ่ จังหวัดสงขลา 90110</p>
            <p>โทร: 074-257884 | Fax: 074-258107 | E-mail: kunlajin@gmail.com</p>
        </div>
    </footer>
</body>
</html>
