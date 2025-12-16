<?php

class Rumah {
    public $warna;
    public $lokasi;

    public function __construct($warnaRumah, $alamatRumah)
    {
        $this->warna  = $warnaRumah;
        $this->lokasi = $alamatRumah;
    }
}

function pasangListrik(Rumah $obj)
{
    return "Sedang memasang listrik di rumah warna " . $obj->warna .
           " berlokasi di " . $obj->lokasi;
}

$rumahUtama = new Rumah("Hijau", "Jl. Kenanga No. 12");
$result = pasangListrik($rumahUtama);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Hinting Demo - Rumah</title>
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
            background: linear-gradient(135deg, #6dd799ff 0%, #abeac5ff 50%, #16a085 100%);
            padding: 20px;
        }

        .container {
            max-width: 650px;
            width: 100%;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 28px;
            padding: 48px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.7s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .house-icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
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

        .property-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }

        .property-item {
            background: #f7fafc;
            padding: 20px;
            border-radius: 16px;
            border-left: 4px solid #2ecc71;
        }

        .property-label {
            color: #2ecc71;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .property-value {
            color: #1a202c;
            font-size: 20px;
            font-weight: 700;
        }

        .action-box {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            padding: 28px;
            border-radius: 20px;
            color: white;
            margin-bottom: 24px;
            box-shadow: 0 12px 35px rgba(46, 204, 113, 0.4);
        }

        .action-box h3 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
            opacity: 0.9;
        }

        .action-box p {
            font-size: 18px;
            font-weight: 600;
            line-height: 1.6;
        }

        .info-box {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 20px 24px;
            border-radius: 12px;
            margin-top: 24px;
        }

        .info-box h4 {
            color: #856404;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-box ul {
            list-style: none;
            color: #856404;
            font-size: 14px;
            line-height: 2;
        }

        .info-box li::before {
            content: '✓';
            color: #ffc107;
            font-weight: bold;
            margin-right: 10px;
        }

        .type-hint-badge {
            display: inline-block;
            background: #e3f2fd;
            color: #1976d2;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            margin-top: 16px;
        }

        @media (max-width: 640px) {
            .card { padding: 32px 24px; }
            h1 { font-size: 28px; }
            .property-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="house-icon">🏡</div>
                <h1>Type Hinting Demo</h1>
                <p class="subtitle">Parameter Type Declaration</p>
            </div>

            <div class="property-grid">
                <div class="property-item">
                    <div class="property-label">Warna</div>
                    <div class="property-value"><?= htmlspecialchars($rumahUtama->warna) ?></div>
                </div>
                <div class="property-item">
                    <div class="property-label">Lokasi</div>
                    <div class="property-value"><?= htmlspecialchars($rumahUtama->lokasi) ?></div>
                </div>
            </div>

            <div class="action-box">
                <h3>⚡ Proses Instalasi</h3>
                <p><?= htmlspecialchars($result) ?></p>
            </div>
        </div>
    </div>
</body>
</html>
