<x-layout>
    <x-slot:title>
        Home - Laravel Blog
    </x-slot:title>

    <style>
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 3rem;
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.25);
        }

        .hero h1 {
            font-size: 2.75rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.125rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }

        .hero-btn {
            display: inline-block;
            padding: 0.875rem 2rem;
            background: white;
            color: #6366f1;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.25rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #1e293b;
        }

        .feature-card p {
            color: #64748b;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1.5rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="hero">
        <h1>Welcome to Laravel Blog</h1>
        <p>
            Platform blog modern yang dibangun dengan Laravel. 
            Explore berbagai artikel menarik dan pelajari framework Laravel.
        </p>
        <a href="/posts" class="hero-btn">Lihat Semua Post →</a>
    </div>

    <div class="features">
        <div class="feature-card">
            <div class="feature-icon">✍️</div>
            <h3>Blog Posts</h3>
            <p>
                Baca berbagai artikel menarik tentang programming, teknologi, 
                dan pengembangan web.
            </p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">📂</div>
            <h3>Categories</h3>
            <p>
                Temukan artikel berdasarkan kategori yang Anda minati 
                untuk pembelajaran yang lebih fokus.
            </p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3>Laravel Powered</h3>
            <p>
                Dibangun dengan Laravel framework, menggunakan best practices 
                dan modern architecture.
            </p>
        </div>
    </div>
</x-layout>