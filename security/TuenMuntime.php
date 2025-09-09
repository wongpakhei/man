<?php
// 模拟选定日期与可预约时间段（可从数据库等动态获取）
$selectedDate = "2025年11月10日 (星期一)";
$timeSlots = [
    "上午 9:15", "上午 9:45", "上午 10:30", "上午 10:45",
    "上午 11:15", "上午 11:30", "上午 11:45", "中午 12:00",
    "下午 12:15", "下午 2:00", "下午 2:15", "下午 2:30",
    "下午 2:45", "下午 3:00", "下午 3:15", "下午 3:30",
    "下午 3:45"
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
        /* 左側輔助連結 */
        .notes {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 10px;
            background-color: #f5f5f5;
        }
        .notes ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .notes li {
            padding: 5px 0;
        }
        .notes a {
            color: #0066cc;
            text-decoration: none;
        }
        /* 右側主要內容區 */
        .main-content {
            flex: 1;
        }
        /* 辦事處資訊區 */
        .location-section {
            background-color: #f5f5f5;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .location-section h3 {
            margin: 0 0 5px 0;
            font-size: 16px;
        }
        .location-section p {
            margin: 0;
            font-size: 14px;
        }
        .location-section a {
            color: #0066cc;
            text-decoration: none;
            font-size: 14px;
        }
        /* 選定日期區 */
        .date-section {
            margin-bottom: 15px;
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
                <p>屯門辦事處 屯門兆麟街19號屯門兆麟政府綜合大樓3樓</p>
                <a href="#">位置地圖</a>
            </div>

            <!-- 選定日期 -->
            <div class="date-section">
                <?php echo $selectedDate; ?>
            </div>

            <!-- 時段按鈕（PHP 循環生成） -->
            <div class="time-slots">
                <?php foreach ($timeSlots as $slot) : ?>
                    <button class="time-slot"><?php echo $slot; ?></button>
                <?php endforeach; ?>
            </div>

            <!-- 返回按鈕 -->
            <button class="back-button">返回</button>
        </div>
    </div>
        <script>
            (function(){
                // Read the displayed date from the page
                var dateEl = document.querySelector('.date-section');
                var selectedDate = dateEl ? dateEl.textContent.trim() : '';

                var OFFICE_SLUG = 'tuenmun';
                var OFFICE_ADDRESS = '屯門辦事處 屯門兆麟街19號屯門兆麟政府綜合大樓3樓';

                // Attach to the actual button class used in this file (.time-slot)
                var buttons = document.querySelectorAll('.time-slot');
                buttons.forEach(function(btn){
                    btn.addEventListener('click', function(){
                        var slot = (btn.textContent || btn.innerText || '').trim();
                        var url = 'email.php?date=' + encodeURIComponent(selectedDate) + '&time=' + encodeURIComponent(slot) + '&office=' + encodeURIComponent(OFFICE_SLUG) + '&officeAddress=' + encodeURIComponent(OFFICE_ADDRESS);
                        window.location.href = url;
                    });
                });

                // Back button selector matches markup
                var back = document.querySelector('.back-button');
                if(back) back.addEventListener('click', function(){ history.back(); });
            })();
        </script>
</body>
</html>