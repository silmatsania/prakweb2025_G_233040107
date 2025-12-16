
    <style>
        .about-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 24px;
            text-align: center;
            margin-bottom: 3rem;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        }

        .about-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .about-hero p {
            font-size: 1.25rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
        }

        .about-content {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 3rem;
        }

        .about-content h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1.5rem;
        }

        .about-content p {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature-item {
            text-align: center;
            padding: 2rem;
            background: #f8fafc;
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-item h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.75rem;
        }

        .feature-item p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .tech-stack {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .tech-stack h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }

        .tech-badge {
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.25rem;
            }

            .about-content {
                padding: 2rem 1.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="about-hero">
        <h1>About Laravel Blog</h1>
        <p>
            A modern blogging platform built with Laravel framework for learning web development
        </p>
    </div>

    <div class="about-content">
        <h2>Our Mission</h2>
        <p>
            Laravel Blog is a learning project designed to demonstrate modern web development practices 
            using the Laravel framework. This platform showcases the implementation of MVC architecture, 
            database relationships, and clean code principles.
        </p>

        <p>
            Through this project, we explore various Laravel features including Eloquent ORM, Blade templating, 
            routing, and more. It serves as a practical example for students learning web development and 
            PHP programming.
        </p>

        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">🎨</div>
                <h3>Modern Design</h3>
                <p>Clean and beautiful user interface with responsive layouts</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">⚡</div>
                <h3>Fast Performance</h3>
                <p>Built with Laravel's optimized architecture for speed</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">🔒</div>
                <h3>Secure</h3>
                <p>Following best practices for web security</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">📱</div>
                <h3>Responsive</h3>
                <p>Works perfectly on all devices and screen sizes</p>
            </div>
        </div>
    </div>
    <div class="tech-stack">
        <h2>Built With</h2>
        <div class="tech-badges">
            <span class="tech-badge">Laravel 11</span>
            <span class="tech-badge">PHP 8.2</span>
            <span class="tech-badge">Blade Templates</span>
            <span class="tech-badge">Eloquent ORM</span>
            <span class="tech-badge">MySQL</span>
            <span class="tech-badge">CSS3</span>
        </div>
    </div>
</x-layout>