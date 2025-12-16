<?php

class Produk {
    public $judul;
    public $penulis;
    public $harga;

    public function __construct($judul, $penulis, $harga)
    {
        $this->judul   = $judul;
        $this->penulis = $penulis;
        $this->harga   = $harga;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga;
    }
}

class Komik extends Produk {
    public $jumlahHalaman;

    public function __construct($judul, $penulis, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->jumlahHalaman = $halaman;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga .
               " | Halaman: " . $this->jumlahHalaman;
    }
}

class Game extends Produk {
    public $lamaMain;

    public function __construct($judul, $penulis, $harga, $durasi)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->lamaMain = $durasi;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga .
               " | Durasi: " . $this->lamaMain . " Jam";
    }
}

$produkA = new Produk("Pulpen Stylus", "Kirana", 12000);

$komikA = new Komik("Petualangan Naga", "Rama Surya", 38000, 95);
$komikB = new Komik("Legenda Samurai", "Dipta", 42000, 110);

$gameA = new Game("Cyber War", "Alvaro", 150000, 6);
$gameB = new Game("Shadow Quest", "Mika", 200000, 12);

$products = [
    ['obj' => $produkA, 'type' => 'product', 'icon' => '✏️'],
    ['obj' => $komikA, 'type' => 'komik', 'icon' => '📚'],
    ['obj' => $komikB, 'type' => 'komik', 'icon' => '📚'],
    ['obj' => $gameA, 'type' => 'game', 'icon' => '🎮'],
    ['obj' => $gameB, 'type' => 'game', 'icon' => '🎮'],
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog - OOP Inheritance Demo</title>
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
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #8b5cf6 100%);
            padding: 48px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 48px;
            animation: fadeInDown 0.8s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-icon {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: white;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 12px;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 18px;
            font-weight: 400;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
            margin-bottom: 48px;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .product-card:nth-child(1) { animation-delay: 0.1s; }
        .product-card:nth-child(2) { animation-delay: 0.2s; }
        .product-card:nth-child(3) { animation-delay: 0.3s; }
        .product-card:nth-child(4) { animation-delay: 0.4s; }
        .product-card:nth-child(5) { animation-delay: 0.5s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        }

        .product-card.komik::before {
            background: linear-gradient(90deg, #f59e0b, #ef4444);
        }

        .product-card.game::before {
            background: linear-gradient(90deg, #10b981, #06b6d4);
        }

        .product-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 20px;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);
        }

        .product-card.komik .card-icon {
            background: linear-gradient(135deg, #f59e0b, #ef4444);
            box-shadow: 0 8px 24px rgba(245, 158, 11, 0.3);
        }

        .product-card.game .card-icon {
            background: linear-gradient(135deg, #10b981, #06b6d4);
            box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
        }

        .product-title {
            color: #1a202c;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .product-author {
            color: #718096;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .product-author::before {
            content: '👤';
            font-size: 14px;
        }

        .product-price {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .product-card.komik .product-price {
            background: linear-gradient(135deg, #f59e0b, #ef4444);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-card.game .product-price {
            background: linear-gradient(135deg, #10b981, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .product-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
            background: #f7fafc;
            border-radius: 12px;
            color: #4a5568;
            font-size: 14px;
            font-weight: 600;
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 12px;
        }

        .product-card.komik .badge {
            background: linear-gradient(135deg, #f59e0b, #ef4444);
        }

        .product-card.game .badge {
            background: linear-gradient(135deg, #10b981, #06b6d4);
        }

        .info-panel {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.6s 0.6s ease-out backwards;
        }

        .info-panel h2 {
            color: #1a202c;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-panel ul {
            list-style: none;
            color: #4a5568;
            font-size: 15px;
            line-height: 2;
        }

        .info-panel li {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-panel li::before {
            content: '✓';
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 36px;
            }

            .products-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .product-card {
                padding: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-icon">🛍️</div>
            <h1>Product Catalog</h1>
            <p class="subtitle">Demonstrasi OOP: Inheritance & Polymorphism</p>
        </header>

        <div class="products-grid">
            <?php foreach ($products as $item): ?>
                <div class="product-card <?= $item['type'] ?>">
                    <div class="card-icon"><?= $item['icon'] ?></div>
                    
                    <?php if ($item['obj'] instanceof Komik): ?>
                        <h3 class="product-title"><?= htmlspecialchars($item['obj']->judul) ?></h3>
                        <p class="product-author"><?= htmlspecialchars($item['obj']->penulis) ?></p>
                        <div class="product-price">Rp <?= number_format($item['obj']->harga, 0, ',', '.') ?></div>
                        <div class="product-meta">
                            📖 <?= $item['obj']->jumlahHalaman ?> Halaman
                        </div>
                        <span class="badge">Komik</span>
                    
                    <?php elseif ($item['obj'] instanceof Game): ?>
                        <h3 class="product-title"><?= htmlspecialchars($item['obj']->judul) ?></h3>
                        <p class="product-author"><?= htmlspecialchars($item['obj']->penulis) ?></p>
                        <div class="product-price">Rp <?= number_format($item['obj']->harga, 0, ',', '.') ?></div>
                        <div class="product-meta">
                            ⏱️ <?= $item['obj']->lamaMain ?> Jam Main
                        </div>
                        <span class="badge">Game</span>
                    
                    <?php else: ?>
                        <h3 class="product-title"><?= htmlspecialchars($item['obj']->judul) ?></h3>
                        <p class="product-author"><?= htmlspecialchars($item['obj']->penulis) ?></p>
                        <div class="product-price">Rp <?= number_format($item['obj']->harga, 0, ',', '.') ?></div>
                        <span class="badge">Produk</span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
