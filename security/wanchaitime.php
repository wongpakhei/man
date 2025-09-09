<?php
// 模拟选定日期与可预约时间段（可从数据库等动态获取）
$selectedDate = "2025年11月10日 (星期一)";
$timeSlots = [
    "上午 9:15", "上午 10:15", "上午 10:45", "上午 11:15",
    "上午 11:30", "上午 11:45", "下午 12:15", "下午 12:30",
    "下午 12:45", "下午 1:45", "下午 2:00", "下午 2:15",
    "下午 2:30", "下午 2:45", "下午 3:00", "下午 3:15",
    "下午 3:30", "下午 3:45", "下午 4:00", "下午 4:15"
];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 3 / 5</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Microsoft JhengHei", Arial, sans-serif;
        }
        body {
            margin: 0;
            padding: 10px;
            background-color: #fff;
        }
        /* 頂部標題欄 */
        .header {
            background: linear-gradient(to right, #a0522d, #8b4513);
            color: #fff;
            padding: 10px 15px;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            border-radius: 3px 3px 0 0;
        }
        /* 整體容器（左側導航 + 右側內容） */
        .container {
            display: flex;
            gap: 20px;
        }
        /* 左側導航欄 */
        .sidebar {
            width: 220px;
        }
        .steps {
            list-style: none;
            padding: 0;
            margin: 0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .steps li {
            padding: 12px 15px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }
        .steps li:last-child {
            border-bottom: none;
        }
        .steps li.active {
            background-color: #a0522d;
            color: #fff;
        }
        /* 左側輔助連結（帶箭頭標識） */
        .notes {
            margin-top: 20px;
            border: 1px solid #eee;
            border-radius: 3px;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .notes ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .notes li {
            padding: 5px 0;
            padding-left: 20px;
            position: relative;
        }
        .notes li::before {
            content: "❖";
            position: absolute;
            left: 5px;
            color: #0066cc;
        }
        .notes a {
            color: #0066cc;
            text-decoration: none;
        }
        /* 右側主要內容區 */
        .main-content {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 0 0 3px 3px;
            padding: 15px;
        }
        /* 辦事處資訊區 */
        .location-section h3 {
            margin: 0 0 5px 0;
            font-size: 16px;
            padding: 8px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .location-section p {
            margin: 5px 0;
            font-size: 14px;
        }
        .location-section a {
            color: #0066cc;
            text-decoration: none;
            font-size: 14px;
        }
        /* 選定日期區 */
        .date-section {
            margin: 15px 0;
            font-size: 16px;
        }
        /* 時段按鈕區（彈性佈局自動換行） */
        .time-slots {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .time-slot {
            background-color: #4a86e8;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            min-width: 150px;
            text-align: center;
        }
        .time-slot:hover {
            background-color: #3a76d8; /* hover 時加深顏色 */
        }
        /* 返回按鈕 */
        .back-button {
            background: linear-gradient(to bottom, #666, #333);
            color: #fff;
            padding: 8px 25px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        .back-button:hover {
            background: linear-gradient(to bottom, #555, #222); /* hover 時加深顏色 */
        }
        /* 小表單樣式去除間距 */
        .time-form { margin: 0; }
    </style>
</head>
<body>
    <!-- 頂部標題 -->
    <div class="header">預約 - 步驟 3 / 5</div>
    
    <div class="container">
        <!-- 左側步驟導航 -->
        <div class="sidebar">
            <ul class="steps">
                <li>步驟 1<br>輸入預約資料</li>
                <li>步驟 2<br>選擇辦理地點</li>
                <li class="active">步驟 3<br>選擇預約時間</li>
                <li>步驟 4<br>確認</li>
                <li>步驟 5<br>預約詳情</li>
            </ul>
            <div class="notes">
                <ul>
                    <li><a href="#">注意事項</a></li>
                    <li><a href="#">常見問題解答</a></li>
                    <li><a href="#">相關條款</a></li>
                    <li><a href="#">技術支援熱線</a></li>
                    <li><a href="#">服務示範</a></li>
                </ul>
            </div>
        </div>

        <!-- 右側內容區 -->
        <div class="main-content">
            <!-- 辦事處資訊 -->
            <div class="location-section">
                <h3>選擇日期與時間</h3>
                <p>辦事處</p>
                <p>港島辦事處 灣仔告士打道7號入境事務大樓8樓</p>
                <a href="#">位置地圖</a>
            </div>

            <!-- 選定日期 -->
            <div class="date-section">
                <?php echo htmlspecialchars($selectedDate, ENT_QUOTES, 'UTF-8'); ?>
            </div>

            <!-- 時段按鈕：每個按鈕為一個 POST 表單，送到 email.php（避免在 URL 出現 query string） -->
            <div class="time-slots">
                <?php foreach ($timeSlots as $slot) : ?>
                    <form class="time-form" method="post" action="email.php">
                        <input type="hidden" name="date" value="<?php echo htmlspecialchars($selectedDate, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="time" value="<?php echo htmlspecialchars($slot, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="office" value="wanchai">
                        <input type="hidden" name="officeAddress" value="港島辦事處 灣仔告士打道7號入境事務大樓8樓">
                        <button type="submit" class="time-slot"><?php echo htmlspecialchars($slot, ENT_QUOTES, 'UTF-8'); ?></button>
                    </form>
                <?php endforeach; ?>
            </div>

            <!-- 返回按鈕 -->
            <button class="back-button" type="button" onclick="history.back()">返回</button>
        </div>
    </div>
</body>
</html>