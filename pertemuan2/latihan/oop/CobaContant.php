<?php

   define("NAMA", "Hikmal Ryvaldi");

   const NRP = 2230400;

   class CobaConstant {
    const JURUSAN = 'Teknik Informatika';
   }

   $constants = [
       ['label' => 'Constant NAMA', 'value' => NAMA, 'type' => 'define'],
       ['label' => 'Constant NRP', 'value' => NRP, 'type' => 'const'],
       ['label' => 'Class Constant JURUSAN', 'value' => CobaConstant::JURUSAN, 'type' => 'class'],
   ];

   $magicConstants = [
       ['label' => '__LINE__', 'value' => __LINE__, 'desc' => 'Nomor baris saat ini'],
       ['label' => '__DIR__', 'value' => __DIR__, 'desc' => 'Direktori file ini'],
   ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
            padding: 48px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 48px;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header-icon {
            width: 90px;
            height: 90px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 45px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: white;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
        }

        .constants-grid {
            display: grid;
            gap: 20px;
            margin-bottom: 32px;
        }

        .constant-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s ease;
            animation: slideIn 0.5s ease-out backwards;
        }

        .constant-card:nth-child(1) { animation-delay: 0.1s; }
        .constant-card:nth-child(2) { animation-delay: 0.2s; }
        .constant-card:nth-child(3) { animation-delay: 0.3s; }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .constant-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .constant-label {
            color: #60a5fa;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .type-badge {
            background: rgba(96, 165, 250, 0.2);
            color: #60a5fa;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
        }

        .constant-value {
            font-family: 'JetBrains Mono', monospace;
            color: #fbbf24;
            font-size: 20px;
            font-weight: 600;
            padding: 16px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            border-left: 4px solid #fbbf24;
        }

        .magic-section {
            margin-top: 32px;
        }

        .magic-section h2 {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .magic-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 16px;
            animation: slideIn 0.5s ease-out backwards;
        }

        .magic-card:nth-child(2) { animation-delay: 0.4s; }
        .magic-card:nth-child(3) { animation-delay: 0.5s; }

        .magic-label {
            color: #a78bfa;
            font-family: 'JetBrains Mono', monospace;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .magic-desc {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
            margin-bottom: 12px;
        }

        .magic-value {
            font-family: 'JetBrains Mono', monospace;
            color: #34d399;
            font-size: 14px;
            padding: 12px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            word-break: break-all;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 24px;
            margin-top: 32px;
            animation: slideIn 0.5s 0.6s ease-out backwards;
        }

        .info-box h3 {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-box ul {
            list-style: none;
            color: rgba(255, 255, 255, 0.8);
            font-size: 15px;
            line-height: 2;
        }

        .info-box li::before {
            content: '→';
            color: #60a5fa;
            font-weight: bold;
            margin-right: 12px;
        }

        @media (max-width: 640px) {
            h1 { font-size: 32px; }
            .constant-value { font-size: 16px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-icon">🔒</div>
            <h1>PHP Constants</h1>
            <p class="subtitle">Demonstrasi Penggunaan Constant & Magic Constants</p>
        </header>

        <div class="constants-grid">
            <?php foreach ($constants as $const): ?>
                <div class="constant-card">
                    <div class="constant-label">
                        <?= $const['label'] ?>
                        <span class="type-badge"><?= $const['type'] ?></span>
                    </div>
                    <div class="constant-value"><?= htmlspecialchars($const['value']) ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>