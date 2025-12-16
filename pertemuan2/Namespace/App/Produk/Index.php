<?php

require_once '../init.php';

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

$serviceUser = new ServiceUser();
$produkUser = new ProdukUser();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace Demo - Aliasing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, #8e54e9 0%, #4776e6 100%);
            padding: 20px;
        }

        .container {
            max-width: 800px;
            width: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 20px 70px rgba(0, 0, 0, 0.35);
            animation: slideIn 0.7s ease-out;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #8e54e9, #4776e6);
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 45px;
            box-shadow: 0 12px 35px rgba(142, 84, 233, 0.4);
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

        .namespace-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .namespace-card {
            background: #f7fafc;
            border-radius: 16px;
            padding: 28px;
            border-top: 4px solid #8e54e9;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .namespace-card:nth-child(2) {
            border-top-color: #4776e6;
        }

        .namespace-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .namespace-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #8e54e9;
            margin-bottom: 12px;
        }

        .namespace-card:nth-child(2) .namespace-label {
            color: #4776e6;
        }

        .namespace-path {
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            color: #2d3748;
            background: white;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 16px;
            border: 2px solid #e2e8f0;
        }

        .alias-badge {
            display: inline-block;
            background: linear-gradient(135deg, #8e54e9, #4776e6);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            font-family: 'JetBrains Mono', monospace;
        }

        .explanation {
            background: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 24px;
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .explanation h3 {
            color: #f57f17;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .explanation p {
            color: #6d4c41;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 12px;
        }

        .code-example {
            background: #1e293b;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 12px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }

        .code-example .keyword {
            color: #c792ea;
        }

        .code-example .namespace-name {
            color: #82aaff;
        }

        .code-example .class-name {
            color: #ffcb6b;
        }

        .code-example .alias {
            color: #f78c6c;
        }

        .benefits {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 20px 24px;
            border-radius: 12px;
            margin-top: 24px;
        }

        .benefits h4 {
            color: #2e7d32;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .benefits ul {
            list-style: none;
            color: #388e3c;
            font-size: 14px;
            line-height: 2;
        }

        .benefits li::before {
            content: '✓';
            color: #4caf50;
            font-weight: bold;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .card { padding: 32px 24px; }
            h1 { font-size: 28px; }
            .namespace-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="icon">📦</div>
                <h1>Namespace Demo</h1>
                <p class="subtitle">Aliasing untuk Menghindari Konflik Nama</p>
            </div>

            <div class="namespace-grid">
                <div class="namespace-card">
                    <div class="namespace-label">Service Namespace</div>
                    <div class="namespace-path">App\Service\User</div>
                    <span class="alias-badge">as ServiceUser</span>
                </div>

                <div class="namespace-card">
                    <div class="namespace-label">Produk Namespace</div>
                    <div class="namespace-path">App\Produk\User</div>
                    <span class="alias-badge">as ProdukUser</span>
                </div>
            </div>

            <div class="explanation">
                <h3>⚠️ Masalahnya: Nama Class yang Sama</h3>
                <p>
                    Kedua namespace memiliki class bernama <strong>User</strong>. 
                    Tanpa aliasing, PHP tidak tahu class mana yang kita maksud.
                </p>
                <p>
                    Dengan menggunakan keyword <code>as</code>, kita memberi alias 
                    untuk membedakan keduanya!
                </p>
            </div>

            <div class="code-example">
<span class="keyword">use</span> <span class="namespace-name">App\Service\User</span> <span class="keyword">as</span> <span class="alias">ServiceUser</span>;
<span class="keyword">use</span> <span class="namespace-name">App\Produk\User</span> <span class="keyword">as</span> <span class="alias">ProdukUser</span>;

<span class="keyword">$serviceUser</span> = <span class="keyword">new</span> <span class="class-name">ServiceUser</span>();
<span class="keyword">$produkUser</span> = <span class="keyword">new</span> <span class="class-name">ProdukUser</span>();
            </div>

            <div class="benefits">
                <h4>✨ Keuntungan Namespace & Aliasing</h4>
                <ul>
                    <li>Menghindari konflik nama class</li>
                    <li>Organisasi code lebih terstruktur</li>
                    <li>Memudahkan maintenance project besar</li>
                    <li>Mendukung autoloading PSR-4</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
