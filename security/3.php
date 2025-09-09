<?php
// 查詢預約步驟1頁面的PHP生成代碼
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>查詢預約 - 步驟 1 / 2</title>
    <style>
        /* 全局樣式重置與基礎設置 */
        body {
            font-family: "Microsoft JhengHei", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        /* 頂部標題欄 */
        .header {
            background: linear-gradient(to right, #8b4513, #cd853f); /* 棕色漸變標題欄 */
            color: #ffffff;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            margin: 10px;
            border-radius: 3px;
        }

        /* 容器：側邊欄 + 內容區 */
        .container {
            display: flex;
            margin: 0 10px;
        }

        /* 左側區域 */
        .left-section {
            width: 250px;
            margin-right: 20px;
        }

        /* 步驟欄 */
        .steps .step {
            padding: 10px;
            border: 1px solid #dddddd;
            margin-bottom: 5px;
        }

        .steps .step.active {
            background-color: #8b4513; /* 激活步驟的棕色背景 */
            color: #ffffff;
        }

        .steps .step.inactive {
            background-color: #f9f9f9; /* 未激活步驟的淺灰背景 */
            color: #333333;
        }

        /* 左側邊欄 */
        .sidebar {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #eeeeee;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 8px 0;
            padding-left: 25px; /* 為圖標預留空間 */
            /* 內聯SVG模擬「箭頭」圖標 */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%230066cc" viewBox="0 0 16 16"><path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/></svg>');
            background-repeat: no-repeat;
            background-position: 5px center;
        }

        .sidebar a {
            color: #0066cc; /* 鏈接藍色 */
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline; /* hover 下劃線 */
        }

        /* 右側表單區域 */
        .right-section {
            flex: 1; /* 佔據剩餘寬度 */
            padding: 10px;
            border: 1px solid #eeeeee;
            background-color: #ffffff;
        }

        .form-header {
            background-color: #eeeeee; /* 表單標題淺灰背景 */
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .form-header svg {
            margin-right: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group .input-row {
            display: flex;
            align-items: center;
        }

        .form-group select,
        .form-group input[type="text"] {
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            margin-right: 10px;
        }

        .form-group select {
            min-width: 220px;
        }

        .form-group .small-input {
            width: 60px;
        }

        .help-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #cd853f; /* 幫助圖標棕色背景 */
            color: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            cursor: help;
            margin-left: 5px;
        }

        .captcha-group {
            display: flex;
            align-items: center;
        }

        .captcha-group img.captcha-img {
            margin-right: 10px;
            border: 1px solid #ddd;
        }

        .captcha-group .icon {
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #5d4037; /* 按鈕深棕色背景 */
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
            min-width: 150px;
        }

        .btn:hover {
            background-color: #795516; /* hover 加深顏色 */
        }

        /* 驗證碼樣式 */
        .captcha-wrapper {
            display: flex;
            align-items: center;
        }

        .captcha-img {
            width: 100px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        .btn-action {
            padding: 8px 12px;
            background-color: #0066cc;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn-action.secondary {
            background-color: #8b4513;
        }

        .btn-action:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- 頂部標題欄 -->
    <div class="header">查詢預約 - 步驟 1 / 2</div>

    <!-- 容器：左側 + 右側 -->
    <div class="container">
        <!-- 左側區域 -->
        <div class="left-section">
            <!-- 步驟欄 -->
            <div class="steps">
                <div class="step active">
                    <h3>步驟 1</h3>
                    <p>輸入預約資料</p>
                </div>
                <div class="step inactive">
                    <h3>步驟 2</h3>
                    <p>詳細資料</p>
                </div>
            </div>

            <!-- 側邊欄 -->
            <div class="sidebar">
                <ul>
                    <li><a href="#">注意事項</a></li>
                    <li><a href="#">常見問題解答</a></li>
                    <li><a href="#">相關條款</a></li>
                    <li><a href="#">技術支援熱線</a></li>
                    <li><a href="#">服務示範</a></li>
                </ul>
            </div>
        </div>

        <!-- 右側表單區域 -->
        <div class="right-section">
            <div class="form-header">
                <!-- 內聯SVG圖標（模擬「查詢」圖標） -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM9.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                預約查詢
            </div>

            <p>請輸入你先前輸入的預約身份證明文件號碼和查詢代碼。身份證明文件號碼已經打印在確認收據上。對於團體預約的情況，請輸入任何已預約的身份證明文件號碼。</p>

            <!-- 證件類型表單組 -->
            <div class="form-group">
                <label>證件類型</label>
                <div class="input-row">
                    <select id="certType">
                        <option value="">請選擇</option>
                        <option value="hkid">香港身份證</option>
                        <option value="Hong Kong Birth Certificate">香港出生證明書</option>
                        <option value="Hong Kong Re-entry Permit">香港回港證</option>
                        <option value="Hong Kong Visa Identity Card">香港簽證身份書</option>
                        <option value="Other Travel Document">其他旅遊證件</option>

                        <!-- 可根據需要添加其他證件類型選項 -->
                    </select>
                    <input id="idNumber" type="text" placeholder="香港身份證號碼">
                    <span>(</span>
                    <input id="idSuffix" type="text" class="small-input" placeholder="">
                    <span>)</span>
                    <span class="help-icon">?</span>
                </div>
            </div>

            <!-- 查詢代碼表單組 -->
            <div class="form-group">
                <label>查詢代碼</label>
                <input id="queryCode" type="text" style="width: 300px;">
            </div>

            <p>為確保對所有申請人公平，請在方格內輸入下方所顯示的四個大寫英文字或數字，以防止有人利用自動化程式進行登記。</p>

            <!-- 驗證碼區塊（與 4.php 一致） -->
            <div class="part-header" style="margin-top:15px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM6 5h4v1H6V5zm0 2h4v1H6V7z"/></svg>
                驗證
            </div>
            <div class="form-group">
                <label>驗證碼</label>
                <div class="captcha-wrapper">
                    <div class="captcha-img" id="captchaPlaceholder">HVAP</div>
                    <input id="captchaInput" type="text" placeholder="輸入驗證碼" style="width:180px; padding:6px;">
                    <button class="btn-action secondary" id="refreshCaptchaBtn">刷新</button>
                    <button class="btn-action" id="audioCaptchaBtn">播放</button>
                </div>
            </div>

            <!-- 按鈕組 -->
                        <!-- 顯示欄位錯誤訊息 -->
                        <div id="formErrors" style="color:#b00020; margin-top:10px; min-height:1.2em;" aria-live="polite"></div>

                        <div class="btn-group">
                                <button class="btn" type="reset" id="resetBtn">重置</button>
                                <button class="btn" type="button" id="backBtn">返回</button>
                                <button class="btn" type="button" id="continueBtn" disabled aria-disabled="true">繼續</button>
                        </div>
        </div>
    </div>
</body>
</body>
<script>
// Enhanced validation: require all fields before allowing Continue; show clear messages for missing/incorrect fields
(function(){
    document.addEventListener('DOMContentLoaded', function(){
        var captchaEl = document.getElementById('captchaPlaceholder');
        var refreshBtn = document.getElementById('refreshCaptchaBtn');
        var audioBtn = document.getElementById('audioCaptchaBtn');
        var input = document.getElementById('captchaInput');
        var continueBtn = document.getElementById('continueBtn');
        var certType = document.getElementById('certType');
        var idNumber = document.getElementById('idNumber');
        var idSuffix = document.getElementById('idSuffix');
        var queryCode = document.getElementById('queryCode');
        var formErrors = document.getElementById('formErrors');
        var backBtn = document.getElementById('backBtn');

        function genCode(len){
            var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            var s = '';
            for(var i=0;i<len;i++) s += chars.charAt(Math.floor(Math.random()*chars.length));
            return s;
        }

        function setCaptcha(){
            var code = genCode(4);
            if(captchaEl){ captchaEl.textContent = code; captchaEl.dataset.code = code; }
        }

        function showErrors(list){
            if(!formErrors) return;
            if(!list || list.length === 0){ formErrors.innerHTML = ''; return; }
            var html = '<ul style="margin:0;padding-left:18px;">';
            list.forEach(function(m){ html += '<li>' + m + '</li>'; });
            html += '</ul>';
            formErrors.innerHTML = html;
        }

        function updateContinueState(){
            var ready = true;
            if(!certType || !certType.value) ready = false;
            if(!idNumber || !idNumber.value.trim()) ready = false;
            if(!queryCode || !queryCode.value.trim()) ready = false;
            if(!input || !input.value.trim()) ready = false;
            if(continueBtn){
                continueBtn.disabled = !ready;
                continueBtn.setAttribute('aria-disabled', (!ready).toString());
            }
        }

        // wire input/change listeners to update enable state
        [certType, idNumber, queryCode, input].forEach(function(el){
            if(!el) return;
            el.addEventListener('input', updateContinueState);
            el.addEventListener('change', updateContinueState);
        });

        if(refreshBtn){
            refreshBtn.addEventListener('click', function(e){ e.preventDefault(); setCaptcha(); updateContinueState(); });
        }

        if(audioBtn){
            audioBtn.addEventListener('click', function(e){
                e.preventDefault();
                var code = captchaEl ? (captchaEl.dataset.code || captchaEl.textContent) : '';
                if(!code) return;
                var u = new SpeechSynthesisUtterance(code.split('').join(' '));
                u.lang = 'en-US';
                u.rate = 0.9;
                window.speechSynthesis.cancel();
                window.speechSynthesis.speak(u);
            });
        }

        if(backBtn){
            backBtn.addEventListener('click', function(){ history.back(); });
        }

        if(continueBtn){
            continueBtn.addEventListener('click', function(e){
                var messages = [];
                // validate required fields
                if(!certType || !certType.value) messages.push('請選擇證件類型。');
                if(!idNumber || !idNumber.value.trim()) messages.push('請輸入證件號碼。');
                if(!queryCode || !queryCode.value.trim()) messages.push('請輸入查詢代碼。');
                var val = (input && input.value || '').trim().toUpperCase();
                var code = captchaEl ? (captchaEl.dataset.code || captchaEl.textContent) : '';
                if(!val) messages.push('請輸入驗證碼。');
                else if(code && val !== code) messages.push('驗證碼不正確，請重試。');

                if(messages.length){
                    e.preventDefault();
                    // show alert listing missing items
                    alert('以下項目未正確填寫：\n- ' + messages.join('\n- '));
                    // also set inline errors for accessibility
                    showErrors(messages);
                    // focus first missing field
                    if(!certType || !certType.value) { certType && certType.focus(); }
                    else if(!idNumber || !idNumber.value.trim()) { idNumber && idNumber.focus(); }
                    else if(!queryCode || !queryCode.value.trim()) { queryCode && queryCode.focus(); }
                    else if(!val) { input && input.focus(); }
                    else { input && input.focus(); }
                    // if captcha wrong, regenerate to avoid brute force
                    if(code && val !== code) setCaptcha();
                    return false;
                }

                // All checks passed - proceed. Replace the following with form submission or navigation as needed.
                showErrors([]);
                // Example: navigate to step 2 (adjust URL accordingly) or submit form
                // location.href = 'step2.php';
                alert('所有欄位已正確填寫，準備進入下一步。');
            });
        }

        // initial setup
        setCaptcha();
        updateContinueState();
    });
})();
</script>
</html>
<?php
// 可在此處添加表單提交、後端邏輯等PHP處理代碼
?>