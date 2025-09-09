<?php
session_start();

// 若以 POST 提交（從 wanchaitime.php 的表單），則寫入 session 以便後續頁面使用
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['date']) || isset($_POST['time']))) {
    $keys = ['date', 'date_iso', 'time', 'office', 'officeAddress', 'email'];
    if (!isset($_SESSION['emailForm']) || !is_array($_SESSION['emailForm'])) $_SESSION['emailForm'] = [];
    foreach ($keys as $k) {
        if (isset($_POST[$k]) && $_POST[$k] !== '') {
            $_SESSION['emailForm'][$k] = $_POST[$k];
        }
    }
}

// 讀取顯示用變數：優先使用 session，次之為 POST，再為 GET
$selected_date = isset($_SESSION['emailForm']['date']) ? $_SESSION['emailForm']['date'] : (isset($_POST['date']) ? $_POST['date'] : (isset($_GET['date']) ? $_GET['date'] : ''));
$selected_date_iso = isset($_SESSION['emailForm']['date_iso']) ? $_SESSION['emailForm']['date_iso'] : (isset($_POST['date_iso']) ? $_POST['date_iso'] : (isset($_GET['date_iso']) ? $_GET['date_iso'] : ''));
$selected_time = isset($_SESSION['emailForm']['time']) ? $_SESSION['emailForm']['time'] : (isset($_POST['time']) ? $_POST['time'] : (isset($_GET['time']) ? $_GET['time'] : ''));
$selected_office = isset($_SESSION['emailForm']['office']) ? $_SESSION['emailForm']['office'] : (isset($_POST['office']) ? $_POST['office'] : (isset($_GET['office']) ? $_GET['office'] : ''));
$selected_office_address = isset($_SESSION['emailForm']['officeAddress']) ? $_SESSION['emailForm']['officeAddress'] : (isset($_POST['officeAddress']) ? $_POST['officeAddress'] : (isset($_GET['officeAddress']) ? $_GET['officeAddress'] : ''));
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 3 / 5</title>
    <style>
        * { box-sizing: border-box; font-family: "Microsoft JhengHei", Arial, sans-serif; }
        body { margin: 0; padding: 20px; background-color: #fff; }
        .header { background: linear-gradient(to right, #a0522d, #8b4513); color: #fff; padding: 10px 15px; font-size: 18px; font-weight: bold; margin-bottom: 10px; border-radius: 5px 5px 0 0; }
        .container { display:flex; gap:20px; }
        .sidebar { width:250px; }
        .steps { list-style:none; padding:0; margin:0; border:1px solid #ddd; border-radius:3px; }
        .steps li { padding:12px 15px; border-bottom:1px solid #ddd; }
        .steps li.active { background:#a0522d; color:#fff; }
        .main-content { flex:1; border:1px solid #ddd; border-radius:0 0 3px 3px; padding:20px; }
        .prompt-header { background:#f5f5f5; padding:10px 15px; border:1px solid #ddd; border-radius:3px; margin-bottom:20px; font-weight:bold; }
        .email-input { width:70%; padding:8px; border:1px solid #ddd; border-radius:3px; background:#eee; }
        .buttons { margin-top:20px; }
        .btn { background:linear-gradient(to bottom,#666,#333); color:#fff; padding:10px 30px; border:none; border-radius:3px; cursor:pointer; font-size:14px; margin-right:15px; }
    </style>
</head>
<body>
    <div class="header">預約 - 步驟 3 / 5</div>

    <div class="container">
        <div class="sidebar">
            <ul class="steps">
                <li>步驟 1<br>輸入預約資料</li>
                <li>步驟 2<br>選擇辦理地點</li>
                <li class="active">步驟 3<br>選擇預約時間</li>
                <li>步驟 4<br>確認</li>
                <li>步驟 5<br>預約詳情</li>
            </ul>
        </div>

        <div class="main-content">
            <div class="prompt-header">預約提示</div>

            <?php if($selected_date || $selected_time || $selected_office): ?>
            <div style="margin-bottom:12px;padding:10px;border:1px dashed #ddd;background:#fafafa;">
                <strong>您剛剛選擇：</strong>
                <ul style="margin:6px 0 0 18px;padding:0;">
                    <?php if($selected_office): ?><li>辦事處：<?php echo htmlspecialchars($selected_office, ENT_QUOTES, 'UTF-8'); ?></li><?php endif; ?>
                    <?php if($selected_office_address): ?><li>辦事處地址：<?php echo htmlspecialchars($selected_office_address, ENT_QUOTES, 'UTF-8'); ?></li><?php endif; ?>
                    <?php if($selected_date): ?><li>日期：<?php echo htmlspecialchars($selected_date, ENT_QUOTES, 'UTF-8'); ?><?php if($selected_date_iso) echo '（' . htmlspecialchars($selected_date_iso, ENT_QUOTES, 'UTF-8') . '）'; ?></li><?php endif; ?>
                    <?php if($selected_time): ?><li>時間：<?php echo htmlspecialchars($selected_time, ENT_QUOTES, 'UTF-8'); ?></li><?php endif; ?>
                </ul>
            </div>
            <?php endif; ?>

            <!-- 使用 POST 直接送到 confirm.php（不改變網址為 GET） -->
            <form method="post" action="confirm.php" id="emailForm">
                <div class="form-section">
                    <p>確認通知及預約提示 (可選)</p>
                    <p>如果你希望在預約日期之前兩天收到提示，請填寫你的通訊資料</p>

                    <div class="radio-group">
                        <div class="radio-option">
                            <label><input type="radio" id="emailRadio" name="notification" value="email"> 使用電郵提示</label>
                            <input type="email" name="email" id="emailInput" class="email-input" placeholder="電郵地址" disabled>
                        </div>
                        <div class="radio-option">
                            <label><input type="radio" id="noNeed" name="notification" value="no_need" checked> 不需要</label>
                        </div>
                    </div>

                    <p>注意：如預約日期為兩天內，申請人將不會收到預約提示</p>

                    <!-- 隱藏欄位：將時間/地點 POST 到 confirm.php -->
                    <input type="hidden" name="date" value="<?php echo htmlspecialchars($selected_date, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="date_iso" value="<?php echo htmlspecialchars($selected_date_iso, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="time" value="<?php echo htmlspecialchars($selected_time, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="office" value="<?php echo htmlspecialchars($selected_office, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="officeAddress" value="<?php echo htmlspecialchars($selected_office_address, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="buttons">
                    <button type="button" class="btn" id="backBtn">返回</button>
                    <button type="submit" class="btn" id="continueBtn">繼續</button>
                </div>
            </form>
        </div>
    </div>

<script>
(function(){
    var emailRadio = document.getElementById('emailRadio');
    var noNeed = document.getElementById('noNeed');
    var emailInput = document.getElementById('emailInput');
    var backBtn = document.getElementById('backBtn');
    var form = document.getElementById('emailForm');

    function setEmailEnabled(enabled){
        if(emailInput){
            emailInput.disabled = !enabled;
            if(!enabled) emailInput.value = '';
            else emailInput.focus();
        }
    }
    if(emailRadio) emailRadio.addEventListener('change', function(){ setEmailEnabled(true); });
    if(noNeed) noNeed.addEventListener('change', function(){ setEmailEnabled(false); });
    setEmailEnabled(false);

    function isValidEmail(email){
        if(!email) return false;
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    if(form){
        form.addEventListener('submit', function(e){
            // 如果選擇使用 email 提示，則要求 email 欄位有效
            if(emailRadio && emailRadio.checked){
                var val = emailInput ? (emailInput.value || '').trim() : '';
                if(!val || !isValidEmail(val)){
                    e.preventDefault();
                    alert('請輸入有效的電郵地址。');
                    if(emailInput) emailInput.focus();
                    return false;
                }
            }
            // POST 會送至 confirm.php（不會改變為 GET query string）
        });
    }

    if(backBtn) backBtn.addEventListener('click', function(){ history.back(); });
})();
</script>
</body>
</html>