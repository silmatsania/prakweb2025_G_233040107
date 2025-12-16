<?php

abstract class Animal {
  public $name = 'Kucing';
  public abstract function run();
}

class Cat extends Animal {
   public function run() {
    return "$this->name itu Berlari";
   }
}

$cat = new Cat();
$result = $cat->run();

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class & Inheritance Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, #2a387eff 0%, #1a191dff 100%);
            padding: 20px;
        }

        .container {
            max-width: 600px;
            width: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideIn 0.6s ease-out;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #442167ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 40px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        h1 {
            color: #1a202c;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #718096;
            font-size: 16px;
            font-weight: 400;
        }

        .result-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 32px;
            border-radius: 16px;
            margin-top: 24px;
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            position: relative;
            overflow: hidden;
        }

        .result-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        .result-box span {
            position: relative;
            z-index: 1;
        }

        .info-section {
            margin-top: 32px;
            padding: 24px;
            background: #f7fafc;
            border-radius: 12px;
            border-left: 4px solid #667eea;
        }

        .info-section h3 {
            color: #2d3748;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .info-section ul {
            list-style: none;
            color: #4a5568;
            font-size: 14px;
            line-height: 1.8;
        }

        .info-section li::before {
            content: "✓ ";
            color: #667eea;
            font-weight: bold;
            margin-right: 8px;
        }

        @media (max-width: 640px) {
            .card {
                padding: 32px 24px;
            }

            h1 {
                font-size: 24px;
            }

            .result-box {
                font-size: 20px;
                padding: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="icon">🐱</div>
                <h1>Abstract Class Demo</h1>
                <p class="subtitle">Demonstrasi Pewarisan & Abstract Method</p>
            </div>
            <div class="result-box">
                <span><?= htmlspecialchars($result) ?></span>
            </div>
        </div>
    </div>
</body>
</html>