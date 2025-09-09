<?php
// 預約步驟3-選擇日期時間頁面生成代碼
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

        /* 辦事點信息區 */
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

        /* 日曆通用樣式 */
        .calendar {
            margin-bottom: 20px;
        }

        .calendar h3 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        .calendar table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .calendar th,
        .calendar td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: center;
            height: 30px;
        }

        .calendar th {
            background: #f2f2f2;
            font-weight: bold;
        }

        /* 日期狀態樣式 */
        .calendar .closed {
            background: #ffcccc; /* 滿額（粉色） */
            color: #999;
            cursor: not-allowed;
        }

        .calendar .available {
            background: #ffaa00; /* 可選（橙色） */
            color: #fff;
            cursor: pointer;
        }

        .calendar .available:hover {
            background: #ff8800; /* hover 加深 */
        }

        .calendar .gray {
            background: #e6e6e6; /* 不可選（灰色） */
            color: #999;
            cursor: not-allowed;
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

            <!-- 辦事點信息區 -->
            <div class="office-info">
                <p><strong>辦事處</strong></p>
                <p>辦事處<br>火炭辦事處 火炭樂景街2至18號銀禧薈4樓405至407號舖位</p>
                <p><a href="#">位置地圖</a></p>
            </div>

            <!-- 九月日曆 -->
            <div class="calendar">
                <h3>九月 2025</h3>
                <table>
                    <thead>
                        <tr>
                            <th>周日</th>
                            <th>周一</th>
                            <th>周二</th>
                            <th>周三</th>
                            <th>周四</th>
                            <th>周五</th>
                            <th>周六</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="gray"></td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">7</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">14</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">21</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="gray">滿額</td>
                            <td class="gray">滿額</td>
                            <td class="gray">滿額</td>
                            <td class="gray">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">28</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 十月日曆 -->
            <div class="calendar">
                <h3>十月 2025</h3>
                <table>
                    <thead>
                        <tr>
                            <th>周日</th>
                            <th>周一</th>
                            <th>周二</th>
                            <th>周三</th>
                            <th>周四</th>
                            <th>周五</th>
                            <th>周六</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray">1</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">5</td>
                            <td class="closed">滿額</td>
                            <td class="gray">7</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">12</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">19</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">26</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="gray">29</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="gray"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 十一月日曆 -->
            <div class="calendar">
                <h3>十一月 2025</h3>
                <table>
                    <thead>
                        <tr>
                            <th>周日</th>
                            <th>周一</th>
                            <th>周二</th>
                            <th>周三</th>
                            <th>周四</th>
                            <th>周五</th>
                            <th>周六</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">2</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">9</td>
                            <td class="available">10</td>
                            <td class="available">11</td>
                            <td class="available">12</td>
                            <td class="available">13</td>
                            <td class="available">14</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">16</td>
                            <td class="available">17</td>
                            <td class="available">18</td>
                            <td class="available">19</td>
                            <td class="available">20</td>
                            <td class="available">21</td>
                            <td class="closed">滿額</td>
                        </tr>
                        <tr>
                            <td class="gray">23</td>
                            <td class="available">24</td>
                            <td class="available">25</td>
                            <td class="available">26</td>
                            <td class="available">27</td>
                            <td class="available">28</td>
                            <td class="available">29</td>
                        </tr>
                        <tr>
                            <td class="gray">30</td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                            <td class="gray"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <script>
            (function(){
                // 取得辦事處名稱（優先取 .office-info 的第二個 <p>，否則退回 .branch-info 的第一個 <p>）
                var officeName = '';
                var officeBlock = document.querySelector('.office-info');
                if(officeBlock){
                    var ps = officeBlock.querySelectorAll('p');
                    if(ps.length >= 2){
                        officeName = ps[1].textContent.trim();
                    } else {
                        // 移除標題詞（例如「辦事處」）再取內容
                        var txt = officeBlock.textContent.replace(/\s+/g,' ').trim();
                        officeName = txt.replace(/^辦事處\s*/,'').trim();
                    }
                } else {
                    var branchP = document.querySelector('.branch-info p');
                    officeName = branchP ? branchP.textContent.trim() : '';
                }

                // 對每一個日曆區塊處理其可選日期
                var calendars = document.querySelectorAll('.calendar');
                calendars.forEach(function(cal){
                    var header = cal.querySelector('h3');
                    var monthText = header ? header.textContent.trim() : '';
                    var availables = cal.querySelectorAll('td.available');
                    availables.forEach(function(cell){
                        // 使其可聚焦並可點擊
                        cell.tabIndex = 0;
                        cell.style.outline = 'none';
                        cell.addEventListener('click', function(){
                            var day = (cell.textContent || cell.innerText).trim();
                            if(!day) return;
                            // 組合成簡單的日期描述（例如：十一月 2025 6）
                            var dateStr = monthText + ' ' + day;
                            var url = 'email.php?date=' + encodeURIComponent(dateStr);
                            if(officeName) url += '&office=' + encodeURIComponent(officeName);
                            window.location.href = url;
                        });
                        // 鍵盤可啟動（Enter）
                        cell.addEventListener('keydown', function(e){ if(e.key === 'Enter'){ cell.click(); } });
                    });
                });
            })();
        </script>
    </body>
    </html>
<?php
// 可在此添加後端邏輯（如動態加載日期預約狀態、時段查詢等）
?>