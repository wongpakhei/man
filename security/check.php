<?php
// 预约页面的 PHP 生成代码
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>預約</title>
    <style>
        /* 全局样式重置与基础设置 */
        body {
            font-family: "Microsoft JhengHei", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        /* 顶部标题栏 */
        .header {
            background-color: #a65a29; /* 棕色标题栏 */
            color: #ffffff;
            padding: 10px 15px;
            font-size: 18px;
            font-weight: bold;
        }

        /* 容器：侧边栏 + 内容区 */
        .container {
            display: flex;
            margin: 10px;
        }

        /* 左侧侧边栏 */
        .sidebar {
            width: 220px;
            background-color: #f5f5f5; /* 侧边栏背景色 */
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
            padding-left: 25px; /* 为图标预留空间 */
            /* 用内联 SVG 模拟「折叠箭头」图标 */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%230066cc" viewBox="0 0 16 16"><path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/></svg>');
            background-repeat: no-repeat;
            background-position: 5px center;
        }

        .sidebar a {
            color: #0066cc; /* 链接蓝色 */
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline; /*  hover 下划线 */
        }

        /* 右侧内容区 */
        .content {
            flex: 1; /* 占据剩余宽度 */
            padding: 10px;
        }

        /* 服务标题栏 */
        .service-header {
            background-color: #eeeeee; /* 浅灰背景 */
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* 隐私政策滚动区域 */
        .policy-section {
            max-height: 300px; /* 限制高度，出现滚动条 */
            overflow-y: auto;
            border: 1px solid #dddddd;
            padding: 10px;
            margin-bottom: 15px;
        }

        .policy-section p {
            margin: 10px 0;
        }

        .policy-section a {
            color: #c00000; /* 红色链接 */
            text-decoration: underline;
        }

        /* 同意声明复选框区域 */
        .agreement {
            margin-bottom: 20px;
        }

        .agreement input {
            margin-right: 5px;
        }

    /* 开始按钮 */
        .btn {
            background-color: #5a4129; /* 深棕色按钮 */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            width: 200px; /* 按钮宽度 */
        }

        .btn:hover {
            background-color: #7a5129; /* hover 加深颜色 */
        }
        .btn.is-disabled {
            opacity: 0.6;
        }

        /* Custom alert modal (matches screenshot style) */
        .custom-alert-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .custom-alert {
            background: #111; /* 深色背景 */
            color: #fff;
            border-radius: 12px;
            max-width: 520px;
            width: calc(100% - 40px);
            padding: 22px 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            font-size: 15px;
        }

        .custom-alert h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 600;
        }

        .custom-alert ul { margin: 8px 0 14px 18px; color:#fff; }
        .custom-alert li { margin-bottom:6px; }

        .custom-alert .confirm-btn {
            display: inline-block;
            background: #cbd6ff; /* 淺紫/藍 */
            color: #111;
            padding: 10px 18px;
            border-radius: 24px;
            border: none;
            cursor: pointer;
            float: right;
            font-weight: 600;
        }

        @media (max-width:520px){ .custom-alert { padding:16px; } }
    </style>
</head>
<body>
    <!-- 顶部标题栏 -->
    <div class="header">預約</div>

    <!-- 容器：侧边栏 + 内容区 -->
    <div class="container">
        <!-- 左侧侧边栏 -->
        <div class="sidebar">
            <ul>
                <li><a href="#">注意事項</a></li>
                <li><a href="#">常見問題解答</a></li>
                <li><a href="#">相關條款</a></li>
                <li><a href="#">技術支援熱線</a></li>
                <li><a href="#">服務示範</a></li>
            </ul>
        </div>

        <!-- 右侧内容区 -->
        <div class="content">
            <!-- 服务标题 -->
            <div class="service-header">申領香港智能身份證預約服務</div>

            <!-- 隐私政策滚动区域 -->
            <div class="policy-section">
                <h3>私隱政策</h3>
                <p>香港特別行政區政府（下稱「政府」）會確保所有透過「香港政府一站通」（下稱「一站通」）遞交的個人資料，均嚴格遵守《個人資料（私隱）條例》的有關條文處理。</p>

                <h3>收集資料</h3>
                <p>政府會使用小型文字檔案（cookies）及網站信標（page tagging）記錄「一站通」的瀏覽情況，但不會收集任何足以辨識使用者身份的資料。</p>

                <h3>小型文字檔案（Cookies）</h3>
                <p>當使用者用電腦瀏覽一個網站時，小型文字檔案會建立於電腦內，這種檔案通常包含匿名而獨有的識別符，用以辨識個別電腦，但不能用以收集任何個人資料，即是說，不具備辨識網站個別使用者的功能。</p>
                <p>政府使用小型文字檔案收集的「一站通」統計資料包括瀏覽人次、使用者對網站及「一站通」提供的網上服務的喜好。</p>
                <p>你可選擇接受或拒絕貯存小型文字檔案。如你拒絕貯存小型文字檔案，將不能使用「一站通」的某些功能，例如貯存你使用「一站通」瀏覽喜好及登入「一站通」的某些網上服務。</p>

                <h3>網站信標（Page tagging）</h3>
                <p>政府使用 JavaScript 及像素標籤（pixel tags）收集訪客的「一站通」使用模式和政府網上服務的使用模式等統計資料，並用以追蹤政府網上廣告的成效。像素標籤為置於特定網頁上的透明圖檔，用以收集瀏覽數據。所收集之數據經整合及分析後，會用作量度成效及改善「一站通」的易用性及所提供的服務或網上廣告，但不會用以收集或辨識個別使用者的個人資料。</p>
                <p>你可在瀏覽器關閉 JavaScript，但關閉 JavaScript 不會影響你登入「一站通」，只是你將不能使用某些功能，例如調整文字大小或透過「一站通」登入政府的網上服務。</p>

                <h3>提供個人資料</h3>
                <p>政府可能會於不同期間及為個別原因，邀請你自願提供個人資料。此等資料可能包括姓名、電話號碼、郵寄地址或電郵地址。政府邀請你提供資料時，會列明收集資料的目的和用途，並會告知你如何要求查閱或改正所提供的個人資料。</p>
                <p>除非法律許可或有所規定，政府不會在未得到你的同意下向第三者披露你的個人資料。</p>
                <p>「一站通」使用保密插口層（SSL）通訊協定傳送網上登記的資料，以確保你的個人資料得到保護。政府會將你於「一站通」提供的個人資料保密，只有獲得授權的人士才可查閱。</p>

                <h3>搜尋服務</h3>
                <p>「一站通」的搜尋服務由政府的獨立承辦商提供。該承辦商在提供搜尋結果時不會收集可識別個人身份的資料，但可能會將部分匿名資料交予政府作網站流量分析之用。政府不會將該等匿名資料與任何政府可能持有的個人身份資料配對。</p>

                <h3>有關收集個人資料的目的</h3>
                <p>你在本申請所提供的個人資料，香港特別行政區政府入境事務處會用作下列一項或多項用途：</p>
                <ul>
                    <li>根據《人事登記條例》(第177 章) 及其附屬規例，辦理你申請登記及申請身份證事宜；</li>
                    <li>根據《陪審團條例》(第3 章) 使高等法院司法常務官得以制定陪審員的臨時名單；</li>
                    <li>使選舉事務處得以核對選民登記冊資料；</li>
                    <li>根據《人事登記條例》(第177 章) 及其附屬規例，行使權力和執行職務，包括按政務司司長根據《人事登記條例》第11 條所作的書面批准披露資料；</li>
                    <li>實施╱執行《入境條例》(第115 章) 及《入境事務隊條例》(第331 章) 的有關條文規定，以及履行入境管制職務，協助其他政府決策局和部門執行其他法例和規例；</li>
                    <li>供政府決策局或部門作統計及研究用途，但所得的統計數字或研究成果不會以識辨各有關的資料當事人或其中任何人的身份的形式提供；及</li>
                    <li>供作法例規定、授權或准許，或由申請人於本申請書上列明同意的其他合法用途。如申請人未滿18歲，則須由其父、母或合法監護人於本申請書上列明同意的其他合法用途。</li>
                </ul>
                <p>根據《人事登記規例》(第177A 章)，登記人士必須提供其個人資料（可選填事項除外）。若你無合理辯解而沒有遵從有關法例規定，即會構成違法。此外，如未能提供足夠個人資料，本處亦可能無法辦理你的申請。</p>

                <h3>資料轉交的類別</h3>
                <p>為了上述目的，你在本表格內所提供的個人資料或會向其他政府決策局、部門或機構披露。</p>

                <h3>查閱個人資料</h3>
                <p>根據《個人資料（私隱）條例》(第486 章) 第18 及 22 條以及附表1 第6項原則，你有權查閱及改正你的個人資料。你的查閱權利包括在繳交有關費用後，索取你在本表格內所提供的個人資料的副本。</p>
                <p>如就本表格所收集的個人資料有任何查詢，包括查閱或改正有關資料，可向下列人員提出：</p>
                <p>新界將軍澳寶邑路61號<br>入境事務處總部行政大樓1樓<br>行政主任(人事登記)支援<br>電話: (852) 2829 3429</p>

                <h3>查詢</h3>
                <p>如有任何查詢，請瀏覽入境事務處網頁 www.immd.gov.hk 。你亦可致電查詢熱線 (2824 6111)，或以圖文傳真 (2877 7711) 或電郵 (enquiry@immd.gov.hk) 向入境事務處查詢及聯絡組提出。</p>

                <h3>版權告示</h3>
                <p>登入「香港政府一站通」（www.gov.hk）（下稱「一站通」）或其任何網頁，即表示你已無條件接受此版權告示的條款，以及政府在毋須事先通知你的情況下可隨時作出的修改及／或增補。請定期瀏覽此網頁，查看此版權告示任何可作出的修改及／或增補。</p>
                <p>除另有註明外，一站通所載的內容皆受香港特別行政區政府所擁有的版權約束。</p>
                <p>有關複製、分發或使用一站通內內容的要求，詳情請聯絡 enquiry@1835500.gov.hk。若內容涉及第三者版權，須先取得該等版權擁有者之授權或同意。</p>

                <h3>連結網站所載內容</h3>
                <p>以上所述之使用准許並不延伸至一站通所連結之其他網站的內容。若你欲複製、分發或以其他方式使用該等連結網站的任何內容，必須先取得有關版權擁有人的授權或准許。政府對任何由第三者在一站通提供之材料或外界網站之內容概不承擔責任，也不表示認可該等內容。</p>

                <h3>免責聲明</h3>
                <p>除非本免責聲明另有註明，一站通內的資訊均以「現況」形式提供，並不作任何明示或暗示的保證。對於內容的準確性、可靠性、安全性及時效性，政府概不作任何保證，也不保證該等內容適合使用或不含電腦病毒。對於任何因使用或依賴一站通所載資料而引致的損失或損害，政府概不承擔任何法律責任。</p>

                <p>當你一旦使用一站通（www.gov.hk）或其任何網頁，即表示你無條件接受上述所載的免責條款，以及政府在毋須事先通知你的情況下而可隨時對上述條款作出的修改及/或增補。請定期瀏覽此網頁查閱任何可作出的修改及/或增補。 </p>
                
            </div>

            <!-- 同意声明复选框 -->
            <div class="agreement">
                <h4>聲明</h4>
                <input type="checkbox" id="agree">
                <label for="agree">我已閱讀並同意以上的私隱政策、有關收集個人資料的目的、版權告示及免責聲明。</label>
            </div>
        <!-- 開始按鈕與錯誤顯示區（預設停用，需勾選同意後啟用） -->
    <div id="formErrors" style="color:#b00020; margin-top:10px; min-height:1.2em;" aria-live="polite"></div>
    <button class="btn is-disabled" id="startBtn" aria-disabled="true">開始</button>
        </div>
    </div>
</body>
<script>
document.addEventListener('DOMContentLoaded', function(){
    var agree = document.getElementById('agree');
    var startBtn = document.getElementById('startBtn');
    var formErrors = document.getElementById('formErrors');
    
    /* 创建模态框 */
    var modalOverlay = document.createElement('div');
    modalOverlay.className = 'custom-alert-overlay';
    modalOverlay.id = 'customAlertOverlay';
    modalOverlay.innerHTML = '<div class="custom-alert" role="dialog" aria-modal="true" aria-labelledby="customAlertTitle">'
      + '<h3 id="customAlertTitle">以下項目未完成：</h3>'
      + '<div id="customAlertList"><ul></ul></div>'
      + '<button class="confirm-btn" id="customAlertConfirm">確定</button>'
    + '</div>';
    document.body.appendChild(modalOverlay);

    var customAlertOverlay = document.getElementById('customAlertOverlay');
    var customAlertList = document.getElementById('customAlertList');
    var customAlertConfirm = document.getElementById('customAlertConfirm');

    // 显示自定义提示框
    function showCustomAlert(items){
        if(!customAlertOverlay) return; 
        var ul = customAlertList.querySelector('ul');
        ul.innerHTML = '';
        // 添加未完成项目到提示框
        items.forEach(function(item){
            var li = document.createElement('li');
            li.textContent = item;
            ul.appendChild(li);
        });
        customAlertOverlay.style.display = 'flex';
        // 聚焦到确认按钮，提升可访问性
        setTimeout(function(){ customAlertConfirm.focus(); }, 10);
    }

    // 隐藏提示框
    function hideCustomAlert(){
        if(customAlertOverlay) {
            customAlertOverlay.style.display = 'none';
        }
    }

    // 绑定提示框确认按钮事件
    if(customAlertConfirm) {
        customAlertConfirm.addEventListener('click', hideCustomAlert);
        // 支持ESC键关闭提示框
        document.addEventListener('keydown', function(e) {
            if(e.key === 'Escape' && customAlertOverlay.style.display === 'flex') {
                hideCustomAlert();
            }
        });
    }

    // 更新开始按钮状态
    if(agree && startBtn){
        function updateStartState(){
            const isChecked = agree.checked;
            startBtn.setAttribute('aria-disabled', String(!isChecked));
            if(isChecked){
                startBtn.classList.remove('is-disabled');
            } else {
                startBtn.classList.add('is-disabled');
            }
            // 清除错误提示
            if(isChecked && formErrors) { formErrors.innerHTML = ''; }
        }

        agree.addEventListener('change', updateStartState);
        updateStartState(); // 初始化狀態（不使用 disabled 屬性以保證點擊事件可觸發）

        // 开始按钮点击事件
        startBtn.addEventListener('click', function(e){
            // allow click always, build missing array and show modal
            var missingItems = [];
            if(!agree.checked) missingItems.push('請勾選同意私隱政策、版權告示及免責聲明');
            if(missingItems.length > 0){
                e.preventDefault();
                showCustomAlert(missingItems);
                if(formErrors){
                    var errorHtml = '<ul style="margin:0;padding-left:18px;">';
                    missingItems.forEach(function(it){ errorHtml += '<li>' + it + '</li>'; });
                    errorHtml += '</ul>';
                    formErrors.innerHTML = errorHtml;
                }
                if(!agree.checked) agree.focus();
                return;
            }
            // proceed
            window.location.href = '4.php';
        });

        // 防止未勾选时按Enter键触发提交
        document.addEventListener('keydown', function(e){
            if(e.key === 'Enter' && !agree.checked) {
                const activeElement = document.activeElement;
                if(activeElement === startBtn || activeElement.tagName === 'BUTTON') {
                    e.preventDefault();
                    // 直接显示提示
                    showCustomAlert(['請勾選同意私隱政策、版權告示及免責聲明']);
                }
            }
        });
    }
});
</script>
</html>
<?php
// 可在此处添加表单提交、业务逻辑等后续 PHP 处理代码
?>