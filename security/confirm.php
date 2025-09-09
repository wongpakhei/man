<?php
session_start();
// 模擬預約資料預設值（當表單/Session 沒有提供時使用）
$defaults = [
    'date' => '香港時間 2025年11月6日 (星期四) 下午 1:00',
    'location' => '港島辦事處 灣仔告士打道7號入境事務大樓8樓',
    'applicantType' => '換領/補領身份證 - 遺失身份證或其他',
    'applicantCount' => 1,
    'idNumber' => '香港身份證：Z7*****7 (9)',
    'birthday' => '11 - MM - 2008',
    'chineseName' => '王小明',
    'englishName' => 'Wong Siu Ming',
    'gender' => '男性',
    'address' => '香港灣仔示例街 123 號',
    'birthplace' => '香港',
    'occupation' => '軟件工程師',
    'email' => 'truelovenotreason@hotmail.com',
    'note' => '如果預約過程中提供的資料不正確，預約將自動被系統註銷，恕不另行通知'
];

// --- 新增：若以 POST 提交（來自 email.php 或 4.php 等），存入 Session，避免只依賴 GET ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // email.php 可能傳來的欄位
    $emailKeys = ['date', 'date_iso', 'time', 'office', 'officeAddress', 'email'];
    if (!isset($_SESSION['emailForm']) || !is_array($_SESSION['emailForm'])) $_SESSION['emailForm'] = [];
    foreach ($emailKeys as $k) {
        if (isset($_POST[$k]) && $_POST[$k] !== '') {
            $_SESSION['emailForm'][$k] = $_POST[$k];
        }
    }

    // 4.php 可能傳來的欄位
    $form4Keys = ['applicantType', 'applicantCount', 'idNumber', 'idSuffix', 'birthDay', 'birthMonth', 'birthYear', 'birthday', 'chineseName', 'englishName', 'gender', 'address', 'birthplace', 'occupation'];
    if (!isset($_SESSION['form4']) || !is_array($_SESSION['form4'])) $_SESSION['form4'] = [];
    foreach ($form4Keys as $k) {
        if (isset($_POST[$k]) && $_POST[$k] !== '') {
            $_SESSION['form4'][$k] = $_POST[$k];
        }
    }
}
// --- end POST persist ---

// 保留：若有人以 GET 傳來（舊版或直接連結），仍寫入 session（不強制使用，但可讓 session 可用）
$emailKeys = ['date', 'date_iso', 'time', 'office', 'officeAddress', 'email'];
foreach ($emailKeys as $k) {
    if (isset($_GET[$k]) && $_GET[$k] !== '') {
        if (!isset($_SESSION['emailForm']) || !is_array($_SESSION['emailForm'])) $_SESSION['emailForm'] = [];
        $_SESSION['emailForm'][$k] = $_GET[$k];
    }
}
$form4Keys = ['applicantType', 'applicantCount', 'idNumber', 'idSuffix', 'birthDay', 'birthMonth', 'birthYear', 'birthday', 'chineseName', 'englishName', 'gender', 'address', 'birthplace', 'occupation'];
foreach ($form4Keys as $k) {
    if (isset($_GET[$k]) && $_GET[$k] !== '') {
        if (!isset($_SESSION['form4']) || !is_array($_SESSION['form4'])) $_SESSION['form4'] = [];
        $_SESSION['form4'][$k] = $_GET[$k];
    }
}

// Helper: 讀取 email 欄位（優先：SESSION -> POST -> GET -> defaults）
function getEmailField($key, $defaults) {
    if (isset($_SESSION['emailForm']) && is_array($_SESSION['emailForm']) && isset($_SESSION['emailForm'][$key]) && $_SESSION['emailForm'][$key] !== '') {
        return $_SESSION['emailForm'][$key];
    }
    if (isset($_POST[$key]) && $_POST[$key] !== '') return $_POST[$key];
    if (isset($_GET[$key]) && $_GET[$key] !== '') return $_GET[$key];
    return $defaults[$key] ?? null;
}

// Helper: 讀取 form4 欄位（優先：SESSION -> POST -> GET -> defaults）
function getForm4Field($key, $defaults) {
    if (isset($_SESSION['form4']) && is_array($_SESSION['form4']) && isset($_SESSION['form4'][$key]) && $_SESSION['form4'][$key] !== '') {
        return $_SESSION['form4'][$key];
    }
    if (isset($_POST[$key]) && $_POST[$key] !== '') return $_POST[$key];
    if (isset($_GET[$key]) && $_GET[$key] !== '') return $_GET[$key];
    return $defaults[$key] ?? null;
}

// --- 輔助：applicantType mapping 與 id 遮罩 ---
function mapApplicantTypeToChinese($key) {
    $map = [
        'new'       => '首次登記身份證（持單程證人士除外）',
        'replace'   => '換領 / 補領身份證',
        'both'      => '同時申請身份證和旅行證件',
        'oldToNew'  => '持舊款身份證人士換領新智能身份證',
        // 若 4.php 使用其他 value，請在此補上 mapping
    ];
    return isset($map[$key]) ? $map[$key] : $key;
}

/**
 * maskIdNumber：保留前兩個字元，其他以 * 顯示（保持長度）
 * 使用 mb_* 支援多位元字元
 */
function maskIdNumber($id) {
    $id = trim((string)$id);
    if ($id === '') return '';
    $len = mb_strlen($id, 'UTF-8');
    if ($len <= 2) return str_repeat('*', $len);
    $first2 = mb_substr($id, 0, 2, 'UTF-8');
    return $first2 . str_repeat('*', $len - 2);
}

// 組合顯示用的資料陣列
$appointmentData = [];
$appointmentData['date'] = getEmailField('date', $defaults);
$appointmentData['location'] = getEmailField('officeAddress', $defaults) ?: (getEmailField('office', $defaults) ?: $defaults['location']);

// applicant fields
$rawApplicantType = getForm4Field('applicantType', $defaults);
$appointmentData['applicantType'] = mapApplicantTypeToChinese($rawApplicantType);
$appointmentData['applicantCount'] = getForm4Field('applicantCount', $defaults);

// id number + suffix -> mask
$rawIdNumber = getForm4Field('idNumber', '');
$idSuffix = getForm4Field('idSuffix', '');
if ($rawIdNumber !== '') {
    $masked = maskIdNumber($rawIdNumber);
    $appointmentData['idNumber'] = $idSuffix ? ($masked . ' (' . $idSuffix . ')') : $masked;
} else {
    $appointmentData['idNumber'] = $defaults['idNumber'];
}

// birthday: 支援整欄 birthday 或 day/month/year 三欄
$birthday = getForm4Field('birthday', '');
if ($birthday) {
    $appointmentData['birthday'] = $birthday;
} else {
    $bd = getForm4Field('birthDay', '');
    $bm = getForm4Field('birthMonth', '');
    $by = getForm4Field('birthYear', '');
    if ($bd || $bm || $by) {
        $appointmentData['birthday'] = trim(($bd ?: '--') . ' - ' . ($bm ?: '--') . ' - ' . ($by ?: '----'));
    } else {
        $appointmentData['birthday'] = $defaults['birthday'];
    }
}

$appointmentData['chineseName'] = getForm4Field('chineseName', $defaults);
$appointmentData['englishName'] = getForm4Field('englishName', $defaults);
$appointmentData['gender'] = getForm4Field('gender', $defaults);
$appointmentData['address'] = getForm4Field('address', $defaults);
$appointmentData['birthplace'] = getForm4Field('birthplace', $defaults);
$appointmentData['occupation'] = getForm4Field('occupation', $defaults);

$appointmentData['email'] = getEmailField('email', $defaults);
$appointmentData['note'] = $defaults['note'];

// 安全輸出
function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>預約 - 步驟 4 / 5</title>
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
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }
        .notes li::before {
            content: "❖";
            position: absolute;
            left: 10px;
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
            padding: 20px;
        }
        /* 確認標題欄 */
        .confirm-header {
            background-color: #f5f5f5;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        /* 資訊網格（兩列布局） */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }
        .info-item {
            margin: 5px 0;
        }
        .info-item strong {
            display: block;
            margin-bottom: 3px;
        }
        .info-item a {
            color: #0066cc;
            text-decoration: none;
            font-size: 14px;
        }
        /* 通知及備註區域 */
        .notice-section {
            margin: 20px 0;
        }
        .notice-section strong {
            display: block;
            margin-bottom: 3px;
        }
        /* 按鈕區 */
        .buttons {
            margin-top: 20px;
        }
        .btn {
            background: linear-gradient(to bottom, #666, #333);
            color: #fff;
            padding: 10px 30px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 15px;
            margin-bottom: 10px;
        }
        .btn:hover {
            background: linear-gradient(to bottom, #555, #222);
        }
        .btn.confirm {
            background: linear-gradient(to bottom, #554, #332); /* 強調確認按鈕 */
        }
        .btn.confirm:hover {
            background: linear-gradient(to bottom, #443, #221);
        }
    </style>
</head>
<body>
    <!-- 頂部標題 -->
    <div class="header">預約 - 步驟 4 / 5</div>
    
    <div class="container">
        <!-- 左側步驟導航 -->
        <div class="sidebar">
            <ul class="steps">
                <li>步驟 1<br>輸入預約資料</li>
                <li>步驟 2<br>選擇辦理地點</li>
                <li>步驟 3<br>選擇預約時間</li>
                <li class="active">步驟 4<br>確認</li>
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
            <!-- 確認標題 -->
            <div class="confirm-header">確認</div>
            
            <!-- 資訊網格（兩列） -->
            <div class="info-grid">
                <div class="info-item">
                    <strong>預約日期</strong>
                    <?php echo e($appointmentData['date']); ?>
                </div>
                <div class="info-item">
                    <strong>預約地點</strong>
                    <?php echo e($appointmentData['location']); ?><br>
                    <a href="#">位置地圖</a>
                </div>
                <div class="info-item">
                    <strong>申請人類型</strong>
                    <?php echo e($appointmentData['applicantType']); ?>
                </div>
                <div class="info-item">
                    <strong>申請人數量</strong>
                    <?php echo e($appointmentData['applicantCount']); ?>
                </div>
                <div class="info-item">
                    <strong>身份證明文件號碼</strong>
                    <?php echo e($appointmentData['idNumber']); ?>
                </div>
                <div class="info-item">
                    <strong>出生日期 (日-月-年)</strong>
                    <?php echo e($appointmentData['birthday']); ?>
                </div>
                <div class="info-item">
                    <strong>中文姓名</strong>
                    <?php echo e($appointmentData['chineseName']); ?>
                </div>
                <div class="info-item">
                    <strong>英文姓名</strong>
                    <?php echo e($appointmentData['englishName']); ?>
                </div>
                <div class="info-item">
                    <strong>性別</strong>
                    <?php echo e($appointmentData['gender']); ?>
                </div>
                <div class="info-item">
                    <strong>地址</strong>
                    <?php echo e($appointmentData['address']); ?>
                </div>
                <div class="info-item">
                    <strong>出生地</strong>
                    <?php echo e($appointmentData['birthplace']); ?>
                </div>
                <div class="info-item">
                    <strong>職業</strong>
                    <?php echo e($appointmentData['occupation']); ?>
                </div>
            </div>
            
            <!-- 確認通知及預約提示 -->
            <div class="notice-section">
                <strong>確認通知及預約提示 (可選)</strong>
                <p>這是一項免費的服務。你已經提供以下的預約提示服務的相關資料。</p>
                <strong>電郵地址:</strong>
                <?php echo e($appointmentData['email']); ?>
                <br><br>
                <strong>重要註釋:</strong>
                <p><?php echo e($appointmentData['note']); ?></p>
            </div>
            
            <!-- 按鈕區 -->
            <div class="buttons">
                <button class="btn" onclick="history.back()">返回</button>
                <button class="btn" onclick="location.href='edit.php'">修改</button>
                <button class="btn confirm">確認預約及預填表格</button>
            </div>
        </div>
    </div>
</body>
</html>