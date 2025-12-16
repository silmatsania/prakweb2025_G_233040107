<?php

interface BisaDimakan {
  public function makan();
}

class Apel implements BisaDimakan {
  
    public function makan() {
  
        return "apel dimakan: Langsung kunyah";
  }
}

class Jeruk implements BisaDimakan {
  
    public function makan() {
    
        return "jeruk dimakan: Kupas dulu, baru kunyah";
  }
}

$apel = new Apel();
$jeruk = new Jeruk();

$fruits = [
    ['obj' => $apel, 'name' => 'Apel', 'icon' => '🍎', 'color' => 'apple'],
    ['obj' => $jeruk, 'name' => 'Jeruk', 'icon' => '🍊', 'color' => 'orange'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Demo - BisaDimakan</title>
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
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 20px;
        }

        .container {
            max-width: 800px;
            width: 100%;
        }

        .header {
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
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 45px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: white;
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 12px;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 18px;
        }

        .fruits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .fruit-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.25);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideUp 0.6s ease-out backwards;
            text-align: center;
        }

        .fruit-card:nth-child(1) { animation-delay: 0.1s; }
        .fruit-card:nth-child(2) { animation-delay: 0.2s; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fruit-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.35);
        }

        .fruit-icon {
            font-size: 80px;
            margin-bottom: 20px;
            display: inline-block;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .fruit-card.apple .fruit-icon { animation-delay: 0s; }
        .fruit-card.orange .fruit-icon { animation-delay: 0.5s; }

        .fruit-name {
            color: #1a202c;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .method-box {
            background: linear-gradient(135deg,  #442167ff 100%, #f5576c 100%);
            padding: 20px 24px;
            border-radius: 16px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.6;
            box-shadow: 0 8px 24px rgba(240, 147, 251, 0.4);
        }

        .fruit-card.apple .method-box {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        }

        .fruit-card.orange .method-box {
            background: linear-gradient(135deg, #ffa500 0%, #ff6347 100%);
        }

        .info-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.25);
            animation: slideUp 0.6s 0.3s ease-out backwards;
        }

        .info-box h2 {
            color: #1a202c;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-box ul {
            list-style: none;
            color: #4a5568;
            font-size: 15px;
            line-height: 2;
        }

        .info-box li::before {
            content: '✓';
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #f093fb, #f5576c);
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            margin-right: 12px;
        }

        @media (max-width: 640px) {
            h1 { font-size: 32px; }
            .fruits-grid { grid-template-columns: 1fr; }
            .fruit-card { padding: 32px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">🍽️</div>
            <h1>Interface Demo</h1>
            <p class="subtitle">Implementasi Interface BisaDimakan</p>
        </div>

        <div class="fruits-grid">
            <?php foreach ($fruits as $fruit): ?>
                <div class="fruit-card <?= $fruit['color'] ?>">
                    <div class="fruit-icon"><?= $fruit['icon'] ?></div>
                    <h3 class="fruit-name"><?= $fruit['name'] ?></h3>
                    <div class="method-box">
                        <?= htmlspecialchars($fruit['obj']->makan()) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>