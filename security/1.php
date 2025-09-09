<?php
/**
 * 預約服務頁面的 PHP 生成代碼
 */
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>預約服務</title>
    <style>
        /* 全局樣式 */
        body {
            font-family: "Microsoft JhengHei", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        /* 頂部標題欄 */
        .header {
            background-color: #a65a29;
            color: #ffffff;
            padding: 10px 15px;
            font-size: 18px;
            font-weight: bold;
        }

        /* 容器（側欄 + 內容區） */
        .container {
            display: flex;
            margin: 10px;
        }

        /* 左側邊欄 */
        .sidebar {
            width: 200px;
            background-color: #f5f5f5;
            padding: 10px;
            margin-right: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 8px 0;
            padding-left: 25px;
            /* 模擬「箭頭」圖標（用內嵌 SVG） */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%230066cc" viewBox="0 0 16 16"><path d="M14 1v12h-1V2H8V1h6zm-2 11H3V2h9v10z"/><path d="M2 4h12v1H2V4z"/></svg>');
            background-repeat: no-repeat;
            background-position: 5px center;
        }

        .sidebar a {
            color: #0066cc;
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        /* 右側內容區 */
        .content {
            flex: 1; /* 佔據剩餘寬度 */
        }

        /* 重要通知區塊 */
        .notice {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #eeeeee;
        }

        .notice h3 {
            background-color: #eaeaea;
            padding: 8px;
            margin: 0 0 10px 0;
            font-size: 16px;
            color: #333333;
        }

        .notice p {
            color: #c00000; /* 紅色文字 */
            margin: 8px 0;
        }

        /* 服務區塊 */
        .service-section {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #eeeeee;
        }

        .service-section h3 {
            background-color: #eaeaea;
            padding: 8px;
            margin: 0 0 10px 0;
            font-size: 16px;
            color: #333333;
        }

        .service-links {
            display: grid;
            grid-template-columns: 1fr 1fr; /* 兩列布局 */
            gap: 10px;
        }

        .service-links a {
            color: #0066cc;
            text-decoration: none;
            padding: 5px;
            display: block;
        }

        .service-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- 頂部標題欄 -->
    <div class="header">預約服務</div>

    <!-- 容器：側欄 + 內容 -->
    <div class="container">
        <!-- 左側邊欄 -->
        <div class="sidebar">
            <ul>
                <li><a href="#">注意事項</a></li>
                <li><a href="#">常見問題解答</a></li>
                <li><a href="#">相關條款</a></li>
                <li><a href="#">技術支援熱線</a></li>
                <li><a href="#">服務示範</a></li>
            </ul>
        </div>

        <!-- 右側內容區 -->
        <div class="content">
            <!-- 重要通知 -->
            <div class="notice">
                <h3>重要通知</h3>
                <p>閣下將有10分鐘時間辦理預約申領香港身份證的手續。請準備好所需資料。</p>
                <p>在完成預約手續後，你可選擇繼續進行預填表格的程序。你亦可以在完成預約手續後，記下相關的「查詢代碼」。及後，你只需要按「預填表格(只供已預約人士)」，並輸入證件號碼及「查詢代碼」以繼續預填表格。請注意，預填表格的時限為20分鐘。</p>
                <p>如欲預約申領兒童身份證或成人身份證，請確保前往人事登記辦事處申請當天申請人已達11歲或18歲的生日，否則申請將不獲處理。</p>
                <p>為方便進行系統提升，本服務將於下列時間暫停：</p>
                <p>2025年9月12日（星期五）下午6時至2025年9月12日（星期五）下午11時30分（香港時間）</p>
                <p>不便之處，敬請見諒。如你需要協助，請於香港時間每日上午7時至下午11時致電入境事務處電子服務技術支援熱線 (852) 3128 8668。</p>
            </div>

            <!-- 申領香港智能身份證預約服務 -->
            <div class="service-section">
                <h3>申領香港智能身份證預約服務</h3>
                <div class="service-links">
                    <a href="book.php">預約</a>
                    <a href="#">更改／取消預約</a>
                    <a href="check.php">查詢預約</a>
                    <a href="#">更改個人預約提示</a>
                    <a href="#">預填表格（只供已預約人士） <img src="1.jpg" alt="手機圖標" style="vertical-align: middle; width:28px; height:28px;"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>