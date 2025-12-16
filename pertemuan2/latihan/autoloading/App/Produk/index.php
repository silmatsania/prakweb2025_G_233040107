<?php

require_once '../init.php';

$cat = new Cat();
$result = $cat->run();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fc466b 0%, #3f5efb 100%);
            padding: 20px;
        }

        .container {
            max-width: 700px;
            width: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 20px 70px rgba(0, 0, 0, 0.3);
            animation: slideIn 0.7s ease-out;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #fc466b, #3f5efb);
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 45px;
            box-shadow: 0 12px 35px rgba(252, 70, 107, 0.4);
            animation: rotate 6s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        h1 {
            color: #1a202c;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #718096;
            font-size: 16px;
        }

        .result-box {
            background: linear-gradient(135deg, #fc466b 0%, #3f5efb 100%);
            padding: 28px;
            border-radius: 18px;
            color: white;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 32px;
            box-shadow: 0 12px 35px rgba(63, 94, 251, 0.4);
        }

        .explanation {
            background: #f7fafc;
            border-left: 4px solid #fc466b;
            padding: 24px;
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .explanation h3 {
            color: #1a202c;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .explanation p {
            color: #4a5568;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 16px;
        }

        .flow-steps {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: white;
            border-radius: 10px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .step:hover {
            border-color: #fc466b;
            transform: translateX(5px);
        }

        .step-number {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #fc466b, #3f5efb);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }

        .step-text {
            color: #2d3748;
            font-size: 14px;
            font-weight: 600;
        }

        .benefits {
            margin-top: 24px;
            padding: 20px;
            background: #e6fffa;
            border-radius: 12px;
            border-left: 4px solid #38b2ac;
        }

        .benefits h4 {
            color: #234e52;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .benefits ul {
            list-style: none;
            color: #2c7a7b;
            font-size: 14px;
            line-height: 2;
        }

        .benefits li::before {
            content: '✓';
            color: #38b2ac;
            font-weight: bold;
            margin-right: 10px;
        }

        @media (max-width: 640px) {
            .card { padding: 32px 24px; }
            h1 { font-size: 28px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="icon">🔄</div>
                <h1>Autoloading Demo</h1>
                <p class="subtitle">Otomatis Load Class Tanpa Require Manual</p>
            </div>

            <div class="result-box">
                <?= htmlspecialchars($result) ?>
            </div>

            <div class="explanation">
                <h3>🎯 Apa itu Autoloading?</h3>
                <p>
                    Autoloading memungkinkan PHP secara otomatis me-load file class 
                    ketika class tersebut digunakan, tanpa perlu menulis <code>require</code> 
                    atau <code>include</code> secara manual untuk setiap file.
                </p>

                <div class="flow-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-text">Panggil <code>new Cat()</code></div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-text">PHP cek: apakah Cat sudah di-load?</div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-text">Autoloader mencari file Cat.php</div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-text">File di-load otomatis</div>
                    </div>
                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-text">Object Cat berhasil dibuat!</div>
                    </div>
                </div>
            </div>

            <div class="benefits">
                <h4>✨ Keuntungan Autoloading</h4>
                <ul>
                    <li>Code lebih bersih dan mudah dibaca</li>
                    <li>Tidak perlu require manual setiap class</li>
                    <li>Struktur project lebih terorganisir</li>
                    <li>Mendukung PSR-4 standard</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>