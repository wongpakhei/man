<?php
// 預約步驟1頁面生成代碼
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 1 / 5</title>
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
            background: #a65a29;
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

        /* 右側內容區域（使用flex佈局推按鈕到底部） */
        .right-content {
            flex: 1;
            padding: 10px;
            border: 1px solid #eee;
            background: #fff;
            display: flex;
            flex-direction: column;
        }

        /* 部分標題（甲、乙部分） */
        .part-header {
            background: #eee;
            padding: 8px 10px;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .part-header svg {
            margin-right: 5px;
        }

        /* 表單組樣式 */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group select,
        .form-group input[type="text"] {
            padding: 6px 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            min-width: 200px;
        }

        .form-group .inline-inputs {
            display: flex;
            align-items: center;
        }

        .form-group .inline-inputs input {
            margin-right: 10px;
        }

        .form-group .small-input {
            width: 60px;
        }

        .help-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #a65a29;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            cursor: help;
            margin-left: 5px;
        }

        /* 注意事項列表 */
        .notes {
            margin-bottom: 20px;
            font-size: 14px;
            color: #333;
        }

        .notes ol {
            padding-left: 20px;
            margin-top: 5px;
        }

        .notes li {
            margin-bottom: 5px;
        }

        /* 申請人區域標題 */
        .applicant-header {
            background: #4a7abc;
            color: #fff;
            padding: 8px 10px;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* 紅色提示文字 */
        .red-tip {
            color: #c00;
            font-size: 13px;
            margin-top: 5px;
        }

        /* 按鈕樣式 */
        .form-actions {
            margin-top: auto; /* 將按鈕組推至容器底部 */
            display: flex;
            gap: 12px;
            padding-top: 20px;
        }

        .btn-action {
            background: #5a4129;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            min-width: 120px;
        }

        .btn-action.secondary {
            background: #777; /* 返回按鈕淺棕色 */
        }

        /* 驗證碼區域樣式 */
        .captcha-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
        }

        .captcha-img {
            border: 1px solid #ddd;
            width: 160px;
            height: 48px;
            display: inline-block;
            background: #f5f5f5;
            text-align: center;
            line-height: 48px;
            font-family: Arial, sans-serif;
            font-size: 24px;
            color: #333;
            user-select: none;
        }
    </style>
</head>
<body>
    <!-- 頂部標題欄 -->
    <div class="top-header">預約 - 步驟 1 / 5</div>

    <!-- 容器：左側步驟 + 右側內容 -->
    <div class="container">
        <!-- 左側步驟導航 -->
        <div class="left-steps">
            <div class="steps-list">
                <div class="step active">
                    步驟 1<br>輸入預約資料
                </div>
                <div class="step inactive">
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
            <div style="margin-top: 20px; background: #f5f5f5; padding: 10px; border: 1px solid #eee;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 5px 0; padding-left: 20px; background: url('4.jpg') no-repeat left center;">
                        <a href="#" style="color: #0066cc; text-decoration: none;">注意事項</a>
                    </li>
                    <li style="padding: 5px 0; padding-left: 20px; background: url('4.jpg') no-repeat left center;">
                        <a href="#" style="color: #0066cc; text-decoration: none;">常見問題解答</a>
                    </li>
                    <li style="padding: 5px 0; padding-left: 20px; background: url('4.jpg') no-repeat left center;">
                        <a href="#" style="color: #0066cc; text-decoration: none;">相關條款</a>
                    </li>
                    <li style="padding: 5px 0; padding-left: 20px; background: url('4.jpg') no-repeat left center;">
                        <a href="#" style="color: #0066cc; text-decoration: none;">技術支援熱線</a>
                    </li>
                    <li style="padding: 5px 0; padding-left: 20px; background: url('4.jpg') no-repeat left center;">
                        <a href="#" style="color: #0066cc; text-decoration: none;">服務示範</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 右側內容區域 -->
        <div class="right-content">
            <!-- 甲部分：申請詳情 -->
            <div class="part-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                甲部分：申請詳情
            </div>

            <div class="form-group" id="applyTypeGroup" style="display:flex;align-items:flex-start;gap:18px;">
                <div style="flex:1;min-width:220px;">
                    <label>申請類別</label>
                    <select id="applyType">
                        <option value="">請選擇</option>
                        <option value="new">首次登記身份證（持單程證人士除外）</option>
                        <option value="replace">換領 / 補領身份證</option>
                        <option value="both">同時申請身份證和旅行證件</option>
                        <option value="oldToNew">持舊款身份證人士換領新智能身份證</option>
                    </select>
                </div>

                <!-- 右側：針對不同申請類別的分支（預設隱藏） -->
                <div style="min-width:220px;">
                    <!-- 首次登記(分支) -->
                    <div class="form-group" id="newOptions" style="display:none;">
                        <label>首次登記 - 申請分類</label>
                        <div style="margin-top:6px;">
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="age11"> 年滿 11 歲申請</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="verifiedPR"> 已成功核實永久性居民身份證資格</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="visa_work"> 持有效簽證或進入許可的新來港人士（就業及各類人才入境計劃或投資或受訓或居留）</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="visa_study"> 持有效簽證或進入許可的新來港人士（就讀）</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="visa_domestic"> 持有效簽證或進入許可的新來港人士（外籍家庭傭工）</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="newCategory" value="visa_import"> 持有效簽證或進入許可的新來港人士（輸入勞工）</label>
                        </div>
                    </div>

                    <!-- 換領/補領(分支) -->
                    <div class="form-group" id="replaceOptions" style="min-width:220px;display:none;">
                        <label>換領 / 補領原因</label>
                        <div style="margin-top:6px;">
                            <label style="display:block;line-height:1.6;"><input type="radio" name="replaceReason" value="Renewing your ID card when you turn 18"> 年滿 18 歲換證</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="replaceReason" value="Renewing your ID card when you turn 11"> 年滿 11 歲換證</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="replaceReason" value="Successfully verified permanent resident identity card eligibility"> 已成功核實永久性居民身份證資格</label>
                            <label style="display:block;line-height:1.6;"><input type="radio" name="replaceReason" value="lost of other"> 遺失身份證或其他</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>申請數目</label>
                <select id="applyCount">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="notes">
                <strong>注意：</strong>
                <ol>
                    <li>你每次最多可預約四人的申請。同一預約內的申請人必須為相同申請類別，並須在同一時段內到所選的預約地點辦理登記。</li>
                    <li>人事登記處一覽處（臨時）辦事處將會為市民提供預約身份證申請服務至2025年10月11日，以處理以下換領身份證的申請：<br>
                        a. 仍持有舊款身份證而需換領新智能身份證人士的申請；<br>
                        b. 年滿11歲或18歲已持有身份證而需換領兒童或成人身份證人士的申請；<br>
                        c. 持有香港居民身份證並已成功核實永久性居民身份資格而需換領永久性居民身份證人士的申請；及<br>
                        d. 因身份證遺失、毀滅、損壞或污損而需要補領身份證的申請 (只限用於指定服務時段：星期一至星期五上午八時至下午四時三十分及星期六上午八時至下午十二時三十分（公眾假期除外）)，無需預約。
                    </li>
                    <li>仍持有舊款身份證的人士，須預約於人事登記處一覽處（臨時）辦事處（只適用於於在2025年10月11日或之前辦理的申請）辦理換領新身份證。鑑於2025年10月13日及之後辦理換領申請的市民，請預約前往其餘六間人事登記辦事處交申請。</li>
                    <li>有關各人登記辦事處的辦公時間及服務範圍，請按此處查看詳情。</li>
                    <li>除因身份證遺失、毀滅、損壞或污損而可毋須預約下前往人事登記辦事處遞交緊急補領申請外，各人登記辦事處不會處理沒有預約的申請。</li>
                    <li>請注意，人事登記辦事處不會處理11歲以下而未持有香港永久性居民身份證的兒童的首次申請香港特別行政區護照及身份證的申請。如欲網上預約申請，請按此處。</li>
                </ol>
            </div>

            <!-- 乙部分：申請人資料 -->
            <div class="part-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                乙部分：申請人資料（如預約時所提供的資料不正確，該預約將從系統中<strong style="color: #c00;">自動刪除</strong>而不作另行通知。）
            </div>

            <div class="applicant-header">申請人 1</div>

            <div class="form-group">
                <label>證件類型 <span id="certTypeStar" style="color:#c00;display:none;">*</span></label>
                <div class="inline-inputs">
                    <select id="app1CertType">
                        <option value="">請選擇</option>
                        <option value="hkid">香港身份證</option>
                        <option value="birthCert">香港出生證明書</option>
                        <option value="reentryPermit">香港回港證</option>
                        <option value="visaIdCard">香港簽證身份書</option>
                        <option value="otherTravel">其他旅遊證件</option>
                    </select>
                    <input id="app1IdNumber" type="text" placeholder="證件號碼" data-real-value="">
                    <span id="idNumberStar" style="color:#c00;display:none;margin-left:6px;">*</span>
                    <span>(</span>
                    <input id="app1IdSuffix" type="text" class="small-input" placeholder="">
                    <span>)</span>
                    <span class="help-icon">?</span>
                </div>
            </div>

            <!-- 新增申請人資料欄位：中文姓名、英文姓名、性別、地址、出生地、職業 -->
            <div class="form-group">
                <label>中文姓名</label>
                <input id="app1ChineseName" type="text" placeholder="請輸入中文姓名" style="min-width:300px;">
            </div>

            <div class="form-group">
                <label>英文姓名</label>
                <input id="app1EnglishName" type="text" placeholder="請輸入英文姓名" style="min-width:300px;">
            </div>

            <div class="form-group">
                <label>性別</label>
                <select id="app1Gender">
                    <option value="">請選擇</option>
                    <option value="M">男</option>
                    <option value="F">女</option>
                    <option value="O">其他/不願透露</option>
                </select>
            </div>

            <div class="form-group">
                <label>地址</label>
                <input id="app1Address" type="text" placeholder="請輸入通訊地址" style="min-width:400px;">
            </div>

            <div class="form-group">
                <label>出生地</label>
                <input id="app1BirthPlace" type="text" placeholder="例如：香港、澳門、廣東省…" style="min-width:300px;">
            </div>

            <div class="form-group">
                <label>職業</label>
                <input id="app1Occupation" type="text" placeholder="請輸入職業" style="min-width:300px;">
            </div>

            <div class="form-group">
                <label>出生日期 (日-月-年) (只需輸入出生日期及出生年份)</label>
                <div class="inline-inputs">
                    <!-- 日下拉框 -->
                    <select id="birthDay">
                        <option value="">日</option>
                        <?php for ($i = 1; $i <= 31; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <!-- 月下拉框 -->
                    <select id="birthMonth">
                        <option value="">月</option>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <!-- 年下拉框 -->
                    <select id="birthYear">
                        <option value="">年</option>
                        <?php
                        $currentYear = date('Y');
                        // 生成從1900到當前年份的選項
                        for ($i = $currentYear; $i >= 1900; $i--): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>

            <!-- 丙部分：查詢代碼 -->
            <div class="part-header" style="margin-top:15px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM7 4h2v2H7V4zm0 3h2v5H7V7z"/></svg>
                丙部分：查詢代碼
            </div>
            <div class="form-group">
                <label>查詢代碼</label>
                <input id="queryCode" type="text" placeholder="請輸入4位查詢代碼" style="min-width:300px;">
                <p style="margin-top:8px;color:#666; font-size:13px;">請輸入一組由4個數字或字母組成的查詢代碼。你需要輸入此查詢代碼才能更改、取消或查詢預約。</p>
            </div>

            <!-- 丁部分：驗證 -->
            <div class="part-header" style="margin-top:15px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM6 5h4v1H6V5zm0 2h4v1H6V7z"/></svg>
                丁部分：驗證
            </div>
            <div class="form-group">
                <label>驗證碼</label>
                <div class="captcha-wrapper">
                    <div class="captcha-img" id="captchaPlaceholder">HVAP</div>
                    <input id="captchaInput" type="text" placeholder="輸入驗證碼" style="width:180px; padding:6px;">
                    <button class="btn-action secondary" id="refreshCaptchaBtn">刷新</button>
                    <button class="btn-action" id="audioCaptchaBtn">播放</button>
                </div>
                <p style="margin-top:8px;color:#666; font-size:13px;">為確保所有申請人公平，請在方格內輸入下方所顯示的四個大寫英文字或數字，以防止有人利用自動化程式進行登記。</p>
            </div>

            <div class="red-tip">
                18歲以下的申請人申請身份證時必須由其父母任何一方或合法監護人陪同，並帶同所需文件。<br>
                請按此處查看詳情。
            </div>

            <!-- 新增：按鈕組（重置、返回、繼續） -->
            <div class="form-actions">
                <button class="btn-action" type="reset" id="resetBtn">重置</button>
                <button class="btn-action secondary" type="button" id="backBtn">返回</button>
                <button class="btn-action" type="button" id="continueBtn">繼續</button>
            </div>
        </div>
    </div>

    <script>
// 驗證碼增強邏輯
(function() {
  document.addEventListener('DOMContentLoaded', function() {
    // 驗證碼相關邏輯
    var captchaEl = document.getElementById('captchaPlaceholder');
    var refreshBtn = document.getElementById('refreshCaptchaBtn');
    var audioBtn = document.getElementById('audioCaptchaBtn');
    var continueBtn = document.getElementById('continueBtn');
    var applyType = document.getElementById('applyType');
    var applyCount = document.getElementById('applyCount');
    var app1CertType = document.getElementById('app1CertType');
    var app1IdNumber = document.getElementById('app1IdNumber');
    var app1IdSuffix = document.getElementById('app1IdSuffix');
    var birthDay = document.getElementById('birthDay');
    var birthMonth = document.getElementById('birthMonth');
    var birthYear = document.getElementById('birthYear');
    var queryCode = document.getElementById('queryCode');
    var captchaInput = document.getElementById('captchaInput');
    // 新增欄位元素
    var app1ChineseName = document.getElementById('app1ChineseName');
    var app1EnglishName = document.getElementById('app1EnglishName');
    var app1Gender = document.getElementById('app1Gender');
    var app1Address = document.getElementById('app1Address');
    var app1BirthPlace = document.getElementById('app1BirthPlace');
    var app1Occupation = document.getElementById('app1Occupation');
        // 新增：星號提示元素
        var certTypeStar = document.getElementById('certTypeStar');
        var idNumberStar = document.getElementById('idNumberStar');

        // 证件号码掩码处理（主號碼與括號後綴分開處理）
        if (app1IdNumber) {
            // 存儲真實值
            let realValue = app1IdNumber.dataset.realValue || '';

            app1IdNumber.addEventListener('input', function(e) {
                const input = e.target;
                // 當前可見文本（使用者剛輸入的原始文本或已被我們替換為星號）
                const currentValue = input.value || '';
                const prevLen = realValue.length;
                const curLen = currentValue.length;
                // 如果長度增加，我們假設使用者插入新字符
                if (curLen > prevLen) {
                    // 取新增的字符（在某些瀏覽器中 currentValue 會包含新字符）
                    const added = currentValue.slice(- (curLen - prevLen));
                    realValue = realValue + added;
                } else if (curLen < prevLen) {
                    // 刪除：根據當前光標位置截斷真實值
                    const sel = input.selectionStart || curLen;
                    realValue = realValue.slice(0, sel);
                }

                input.dataset.realValue = realValue;
                input.value = '*'.repeat(realValue.length);
                try { input.setSelectionRange(realValue.length, realValue.length); } catch (er) {}
                updateAsterisks();
            });

            app1IdNumber.addEventListener('paste', function(e){
                e.preventDefault();
                const clipboardData = e.clipboardData || window.clipboardData;
                const pastedText = clipboardData.getData('text') || '';
                realValue += pastedText;
                this.dataset.realValue = realValue;
                this.value = '*'.repeat(realValue.length);
                updateAsterisks();
            });
        }

        // 掩碼處理：括號內的後綴(例如 A123) 顯示為 *
        if (app1IdSuffix) {
            let realSuffix = app1IdSuffix.dataset.realSuffix || '';
            app1IdSuffix.addEventListener('input', function(e){
                const input = e.target;
                const currentValue = input.value || '';
                const prevLen = realSuffix.length;
                const curLen = currentValue.length;
                if (curLen > prevLen) {
                    const added = currentValue.slice(- (curLen - prevLen));
                    realSuffix = realSuffix + added;
                } else if (curLen < prevLen) {
                    const sel = input.selectionStart || curLen;
                    realSuffix = realSuffix.slice(0, sel);
                }
                input.dataset.realSuffix = realSuffix;
                input.value = '*'.repeat(realSuffix.length);
                try { input.setSelectionRange(realSuffix.length, realSuffix.length); } catch (er) {}
                updateAsterisks();
            });

            app1IdSuffix.addEventListener('paste', function(e){
                e.preventDefault();
                const clipboardData = e.clipboardData || window.clipboardData;
                const pastedText = clipboardData.getData('text') || '';
                realSuffix += pastedText;
                this.dataset.realSuffix = realSuffix;
                this.value = '*'.repeat(realSuffix.length);
                updateAsterisks();
            });
        }

        function updateAsterisks(){
            if (certTypeStar) certTypeStar.style.display = (app1CertType && app1CertType.value) ? 'inline' : 'none';
            // 检查真实值是否存在
            const realIdValue = app1IdNumber ? app1IdNumber.dataset.realValue || '' : '';
            if (idNumberStar) idNumberStar.style.display = realIdValue ? 'inline' : 'none';
        }
        if (app1CertType){
            app1CertType.addEventListener('change', updateAsterisks);
        }

    function generateCaptcha(length = 4) {
      const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      let code = '';
      for (let i = 0; i < length; i++) {
        code += chars.charAt(Math.floor(Math.random() * chars.length));
      }
      return code;
    }

    function setCaptcha() {
      const code = generateCaptcha(4);
      if (captchaEl) {
        captchaEl.textContent = code;
        captchaEl.dataset.code = code; // 存儲真實驗證碼用於後續校驗
      }
    }

    if (refreshBtn) {
      refreshBtn.addEventListener('click', function(e) {
        e.preventDefault();
        setCaptcha();
      });
    }

    if (audioBtn) {
      audioBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const code = captchaEl ? (captchaEl.dataset.code || captchaEl.textContent) : '';
        if (!code) return;
        // 語音播放驗證碼（每個字符間隔播放）
        const utterance = new SpeechSynthesisUtterance(code.split('').join(' '));
        utterance.rate = 0.9; // 放慢語速
        window.speechSynthesis.cancel(); // 取消正在播放的語音
        window.speechSynthesis.speak(utterance);
      });
    }

        // Continue 按鈕檢查所有必填項
        if (continueBtn) {
            continueBtn.addEventListener('click', function(e) {
                var missing = [];
                if (!applyType || !applyType.value) missing.push('請選擇申請類別');
                if (!applyCount || !applyCount.value) missing.push('請選擇申請數目');
                if (!app1CertType || !app1CertType.value) missing.push('請選擇申請人證件類型');
                
                // 验证证件号码使用真实值
                const realIdValue = app1IdNumber ? app1IdNumber.dataset.realValue || '' : '';
                if (!realIdValue.trim()) missing.push('請輸入申請人證件號碼');
                
                if (!app1ChineseName || !app1ChineseName.value.trim()) missing.push('請輸入中文姓名');
                if (!app1EnglishName || !app1EnglishName.value.trim()) missing.push('請輸入英文姓名');
                if (!app1Gender || !app1Gender.value) missing.push('請選擇性別');
                if (!app1Address || !app1Address.value.trim()) missing.push('請輸入地址');
                if (!app1BirthPlace || !app1BirthPlace.value.trim()) missing.push('請輸入出生地');
                if (!app1Occupation || !app1Occupation.value.trim()) missing.push('請輸入職業');
                if (!birthDay || !birthDay.value) missing.push('請選擇出生日期（日）');
                if (!birthMonth || !birthMonth.value) missing.push('請選擇出生日期（月）');
                if (!birthYear || !birthYear.value) missing.push('請選擇出生日期（年）');
                if (!queryCode || !queryCode.value.trim()) missing.push('請輸入查詢代碼');
                var capVal = captchaInput ? (captchaInput.value || '').trim().toUpperCase() : '';
                var capCode = captchaEl ? (captchaEl.dataset.code || captchaEl.textContent) : '';
                if (!capVal) missing.push('請輸入驗證碼');
                else if (capCode && capVal !== capCode) missing.push('驗證碼不正確');

                if (missing.length) {
                    e.preventDefault();
                    // 顯示 alert，逐行列出缺失項目
                    alert('以下項目未正確填寫：\n- ' + missing.join('\n- '));
                    // 若驗證碼錯誤，重新生成
                    if (capCode && capVal !== capCode) setCaptcha();
                    return false;
                }

                // 若全部填寫正確，導向步驟2（選擇辦理地點）
                // 導向至 place.php
                window.location.href = 'place.php';
             });
        }

    // 初始化驗證碼
    setCaptcha();
  });
})();
</script>
        <script>
        // 顯示/隱藏換領原因分支
        (function(){
            document.addEventListener('DOMContentLoaded', function(){
                var applyType = document.getElementById('applyType');
                var replaceOpts = document.getElementById('replaceOptions');
                var newOpts = document.getElementById('newOptions');
                function updateBranchVisibility(){
                    if (!applyType) return;
                    // hide all branches first
                    if (replaceOpts) replaceOpts.style.display = 'none';
                    if (newOpts) newOpts.style.display = 'none';
                    // show the one for the selected type
                    if (applyType.value === 'replace' && replaceOpts) replaceOpts.style.display = 'block';
                    if (applyType.value === 'new' && newOpts) newOpts.style.display = 'block';
                }
                if (applyType){
                    applyType.addEventListener('change', updateBranchVisibility);
                    // 初始化時根據當前值設置可見性
                    updateBranchVisibility();
                }
            });
        })();
        </script>
</body>
</html>
<?php
// 可在此添加表單提交、後端驗證等PHP後端邏輯
?>