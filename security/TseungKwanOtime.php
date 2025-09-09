<?php
// 預約步驟3（選擇時段）頁面生成代碼
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 3 / 5</title>
    <style>
        /* 全局樣式重置 */
        body {
            font-family: "Microsoft JhengHei", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }

        /* 頂部標題欄 */
        .top-header {
            background: linear-gradient(to right, #8b4513, #cd853f);
            color: #fff;
            padding: 10px 15px;
            font-size: 18px;
            font-weight: bold;
            margin: 10px;
            border-radius: 3px;
        }

        /* 容器：左側步驟欄 + 右側內容區 */
        .container {
            display: flex;
            margin: 0 10px;
        }

        /* 左側列（步驟導航 + 輔助鏈接） */
        .left-column {
            width: 220px;
            margin-right: 20px;
        }

        /* 步驟列表樣式 */
        .steps-list {
            border: 1px solid #ddd;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .steps-list .step {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .steps-list .step:last-child {
            border-bottom: none;
        }

        .steps-list .step.active {
            background: #a65a29;
            color: #fff;
            font-weight: bold;
        }

        .steps-list .step.inactive {
            background: #f9f9f9;
            color: #333;
        }

        /* 左側輔助鏈接區 */
        .sidebar-links {
            background: #f5f5f5;
            padding: 10px;
            border: 1px solid #eee;
            border-radius: 3px;
        }

        .sidebar-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-links li {
            padding: 5px 0;
            padding-left: 25px;
            background: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"%230066cc\" viewBox=\"0 0 16 16\"><path d=\"M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 11H7v-2h2v2zm0-4H7V4h2v4z\"/></svg>') no-repeat left center;
        }

        .sidebar-links a {
            color: #0066cc;
            text-decoration: none;
        }

        .sidebar-links a:hover {
            text-decoration: underline;
        }

        /* 右側內容區域 */
        .right-content {
            flex: 1;
            padding: 10px;
            border: 1px solid #eee;
            background: #fff;
            border-radius: 3px;
        }

        /* 選擇日期時間標題欄 */
        .section-header {
            background: #eee;
            padding: 8px 10px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            border-radius: 3px;
        }

        .section-header svg {
            margin-right: 5px;
        }

        /* 辦事處信息區 */
        .office-info {
            margin-bottom: 15px;
        }

        .office-info a {
            color: #0066cc;
            text-decoration: none;
        }

        .office-info a:hover {
            text-decoration: underline;
        }

        /* 日期顯示區 */
        .date-display {
            margin-bottom: 15px;
            color: #333;
        }

        /* 時段按鈕 */
        .time-btn {
            background: #4a7abc;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .time-btn:hover {
            background: #3a6aac;
        }

        /* 返回按鈕 */
        .back-btn {
            background: #5a4129;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            min-width: 120px;
        }

        .back-btn:hover {
            background: #7a5129;
        }
    </style>
</head>
<body>
    <!-- 頂部標題欄 -->
    <div class="top-header">預約 - 步驟 3 / 5</div>

    <!-- 容器：左側步驟 + 右側內容 -->
    <div class="container">
        <!-- 左側列（步驟導航 + 輔助鏈接） -->
        <div class="left-column">
            <div class="steps-list">
                <div class="step inactive">
                    步驟 1<br>輸入預約資料
                </div>
                <div class="step inactive">
                    步驟 2<br>選擇辦理地點
                </div>
                <div class="step active">
                    步驟 3<br>選擇預約時間
                </div>
                <div class="step inactive">
                    步驟 4<br>確認
                </div>
                <div class="step inactive">
                    步驟 5<br>預約詳情
                </div>
            </div>

            <div class="sidebar-links">
                <ul>
                    <li><a href="#">注意事項</a></li>
                    <li><a href="#">常見問題解答</a></li>
                    <li><a href="#">相關條款</a></li>
                    <li><a href="#">技術支援熱線</a></li>
                    <li><a href="#">服務示範</a></li>
                </ul>
            </div>
        </div>

        <!-- 右側內容區域 -->
        <div class="right-content">
            <!-- 選擇日期與時間標題欄 -->
            <div class="section-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm2 3H6v2h4V4zm1 10.93A8 8 0 0 0 1 13c0 4.42 3.58 8 8 8s8-3.58 8-8a8 8 0 0 0-7-7.93V4h2v2h-2v2h2v2h-2v4z"/>
                </svg>
                選擇日期與時間
            </div>

            <!-- 辦事處信息區 -->
            <div class="office-info">
                <p><strong>辦事處</strong></p>
                <p>將軍澳辦事處 將軍澳寶邑路61號入境事務處總部行政大樓3樓</p>
                <p><a href="#">位置地圖</a></p>
            </div>

            <!-- 日期顯示區 -->
            <div class="date-display">
                2025年11月17日 (星期一)
            </div>

            <!-- 時段按鈕 -->
            <button class="time-btn">下午 2:15</button>

            <!-- 返回按鈕 -->
            <button class="back-btn" style="margin-top: 20px;">返回</button>
        </div>
    </div>
    <script>
            (function(){
                // Read the displayed date from the page
                var dateEl = document.querySelector('.date-display');
                var selectedDate = dateEl ? dateEl.textContent.trim() : '';

                var OFFICE_SLUG = 'tseungkwano';
                var OFFICE_ADDRESS = '將軍澳辦事處 將軍澳寶邑路61號入境事務處總部行政大樓3樓';

                // Attach to the actual button class used in this file (.time-btn)
                var buttons = document.querySelectorAll('.time-btn');
                buttons.forEach(function(btn){
                    btn.addEventListener('click', function(){
                        var slot = (btn.textContent || btn.innerText || '').trim();
                        var url = 'email.php?date=' + encodeURIComponent(selectedDate) + '&time=' + encodeURIComponent(slot) + '&office=' + encodeURIComponent(OFFICE_SLUG) + '&officeAddress=' + encodeURIComponent(OFFICE_ADDRESS);
                        window.location.href = url;
                    });
                });

                // Back button selector matches markup
                var back = document.querySelector('.back-btn');
                if(back) back.addEventListener('click', function(){ history.back(); });
            })();
        </script>
</body>
</html>