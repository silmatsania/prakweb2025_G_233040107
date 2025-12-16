<?php

class ContohStatic {

  public static $angka = 1; 
  public static function hello() {
    
    return 'Hello '. self::$angka;
  }
}

$staticProp = ContohStatic::$angka;
$staticMethod = ContohStatic::hello();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Members Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            padding: 20px;
        }

        .container {
            max-width: 700px;
            width: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #e94560, #533483);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 40px;
            box-shadow: 0 10px 30px rgba(233, 69, 96, 0.4);
        }

        h1 {
            color: white;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
        }

        .demo-section {
            margin-bottom: 32px;
        }

        .section-title {
            color: #e94560;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title::before {
            content: '';
            width: 4px;
            height: 20px;
            background: linear-gradient(135deg, #e94560, #533483);
            border-radius: 2px;
        }

        .code-box {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(233, 69, 96, 0.3);
            border-radius: 12px;
            padding: 20px 24px;
            font-family: 'JetBrains Mono', monospace;
            margin-bottom: 12px;
        }

        .code-label {
            color: #60a5fa;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .code-output {
            color: #fbbf24;
            font-size: 18px;
            font-weight: 700;
        }

        .result-box {
            background: linear-gradient(135deg, #e94560 0%, #533483 100%);
            padding: 24px;
            border-radius: 16px;
            color: white;
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            box-shadow: 0 10px 30px rgba(233, 69, 96, 0.4);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .info-panel {
            margin-top: 32px;
            padding: 24px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .info-panel h3 {
            color: white;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .info-panel ul {
            list-style: none;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            line-height: 2;
        }

        .info-panel li::before {
            content: '▸';
            color: #e94560;
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
                <div class="icon">⚡</div>
                <h1>Static Members</h1>
                <p class="subtitle">Demonstrasi Static Property & Method</p>
            </div>

            <div class="demo-section">
                <div class="section-title">Static Property</div>
                <div class="code-box">
                    <div class="code-label">ContohStatic::$angka</div>
                    <div class="code-output"><?= htmlspecialchars($staticProp) ?></div>
                </div>
            </div>

            <div class="demo-section">
                <div class="section-title">Static Method</div>
                <div class="code-box">
                    <div class="code-label">ContohStatic::hello()</div>
                    <div class="code-output"><?= htmlspecialchars($staticMethod) ?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>