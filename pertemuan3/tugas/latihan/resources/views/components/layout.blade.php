<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --dark: #1e293b;
            --light: #f8fafc;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Modern Navbar */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #64748b;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--gradient);
            border-radius: 2px 2px 0 0;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
            flex: 1;
            width: 100%;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 2.5rem 0 1rem;
            margin-top: auto;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        footer h3 {
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        footer p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            font-size: 0.9rem;
        }

        footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.9rem;
        }

        footer a:hover {
            color: white;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.875rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                gap: 1.25rem;
            }

            .nav-links a {
                font-size: 0.875rem;
            }

            .container {
                padding: 1.5rem 1rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .nav-brand {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                padding: 0 1rem;
            }

            .nav-links {
                gap: 0.75rem;
            }

            .nav-links a {
                font-size: 0.8rem;
                padding: 0.25rem 0;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-container">
            <a href="/" class="nav-brand">Laravel Blog</a>
            <ul class="nav-links">
                <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/students" class="{{ request()->is('students*') ? 'active' : '' }}">Students</a></li>
                <li><a href="/posts" class="{{ request()->is('posts*') ? 'active' : '' }}">Posts</a></li>
                <li><a href="/categories" class="{{ request()->is('categories*') ? 'active' : '' }}">Categories</a></li>
                <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            </ul>
        </div>
    </nav>

    <main class="container animate-fade-in">
        {{ $slot }}
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div>
                    <h3>Laravel Blog</h3>
                    <p>
                        Platform blog modern yang dibangun dengan Laravel.<br>
                        Praktikum Pemrograman Web 2025
                    </p>
                </div>
                <div>
                    <h3>Quick Links</h3>
                    <div class="footer-links">
                        <a href="/">Home</a>
                        <a href="/posts">All Posts</a>
                        <a href="/categories">Categories</a>
                        <a href="/about">About Us</a>
                    </div>
                </div>
                <div>
                    <h3>Resources</h3>
                    <div class="footer-links">
                        <a href="https://laravel.com/docs" target="_blank">Laravel Docs</a>
                        <a href="https://github.com" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2025 Laravel Blog. Made with ❤️ for learning
            </div>
        </div>
    </footer>
</body>

</html>
