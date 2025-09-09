<?php
// 預約步驟2頁面生成代碼
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 2 / 5</title>
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

        /* 左側步驟導航 */
        .left-steps {
            width: 220px;
            margin-right: 20px;
        }

        .steps-list .step {
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 2px;
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

        /* 左側底部鏈接區 */
        .sidebar-links {
            margin-top: 20px;
            background: #f5f5f5;
            padding: 10px;
            border: 1px solid #eee;
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
        }

        /* 選擇地點標題 */
        .location-header {
            background: #eee;
            padding: 8px 10px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .location-header svg {
            margin-right: 5px;
        }

        /* 辦事處表格 */
        .office-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .office-table th,
        .office-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .office-table th {
            background: #f2f2f2;
            font-weight: bold;
        }

        .office-table .region {
            background: #e6e6f7; /* 地區行淺藍背景 */
            font-weight: bold;
        }

        .office-table a {
            color: #0066cc;
            text-decoration: none;
        }

        .office-table a:hover {
            text-decoration: underline;
        }

        /* 備註文字 */
        .notes {
            font-size: 13px;
            color: #333;
            margin-bottom: 20px;
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
    <div class="top-header">預約 - 步驟 2 / 5</div>

    <!-- 容器：左側步驟 + 右側內容 -->
    <div class="container">
        <!-- 左側步驟導航 -->
        <div class="left-steps">
            <div class="steps-list">
                <div class="step inactive">
                    步驟 1<br>輸入預約資料
                </div>
                <div class="step active">
                    步驟 2<br>選擇辦理地點
                </div>
                <div class="step inactive">
                    步驟 3<br>選擇預約時間
                </div>
                <div class="step inactive">
                    步驟 4<br>確認
                </div>
                <div class="step inactive">
                    步驟 5<br>預約詳情
                </div>
            </div>

            <!-- 左側底部鏈接 -->
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
            <!-- 選擇辦理地點標題 -->
            <div class="location-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm2 3H6v2h4V4zm1 10.93A8 8 0 0 0 1 13c0 4.42 3.58 8 8 8s8-3.58 8-8a8 8 0 0 0-7-7.93V4h2v2h-2v2h2v2h-2v4z"/>
                </svg>
                選擇辦理地點
            </div>

            <!-- 辦事處表格 -->
            <table class="office-table">
                <thead>
                    <tr>
                        <th>辦事處</th>
                        <th>最早日期</th>
                        <th>其他日期</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="region">
                        <td colspan="3">香港</td>
                    </tr>
                    <tr>
                        <td>灣仔</td>
                        <td><a href="wanchaitime.php">2025年11月10日 (星期一)</a></td>
                        <td><a href="wanchaiotherday.php">其他日期</a></td>
                    </tr>
                    <tr class="region">
                        <td colspan="3">九龍</td>
                    </tr>
                    <tr>
                        <td>長沙灣</td>
                        <td><a href="CheungShaWantime.php">2025年11月10日 (星期一)</a></td>
                        <td><a href="CheungShaWanotherday.php">其他日期</a></td>
                    </tr>
                    <tr class="region">
                        <td colspan="3">新界</td>
                    </tr>
                    <tr>
                        <td>將軍澳</td>
                        <td><a href="TseungKwanOtime.php">2025年11月17日 (星期一)</a></td>
                        <td><a href="TseungKwanOotherday.php">其他日期</a></td>
                    </tr>
                    <tr>
                        <td>元朗</td>
                        <td><a href="YuenLongtime.php">2025年11月5日 (星期三)</a></td>
                        <td><a href="YuenLongotherday.php">其他日期</a></td>
                    </tr>
                    <tr>
                        <td>火炭</td>
                        <td><a href="fotantime.php">2025年11月6日 (星期四)</a></td>
                        <td><a href="fotanotherday.php">其他日期</a></td>
                    </tr>
                    <tr>
                        <td>屯門</td>
                        <td><a href="TuenMuntime.php">2025年11月10日 (星期一)</a></td>
                        <td><a href="TuenMunotherday.php">其他日期</a></td>
                    </tr>
                </tbody>
            </table>

            <!-- 備註文字 -->
            <div class="notes">
                註: 如因身份證遺失、毀滅、損壞或污損而需補領身份證，申請人亦可在指定服務時間(即星期一至星期五上午八時至下午四時三十分及星期六上午八時至下午十二時三十分（公眾假期除外）) 前往人事登記處—觀塘（臨時）辦事處辦理，無需預約。請注意：人事登記處—觀塘（臨時）辦事處將於2025年10月11日後停止辦理身份證申請。
            </div>

            <!-- 返回按鈕 -->
            <button class="back-btn">返回</button>
        </div>
    </div>
</body>
</html>
<?php
// 可在此添加後端邏輯（如地點數據加載、預約邏輯等）
?>