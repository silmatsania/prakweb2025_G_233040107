<x-layout>
    <x-slot:title>
        {{ $post->title }} - Laravel Blog
    </x-slot:title>

    <style>
        .post-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .post-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 24px;
            margin-bottom: 3rem;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        }

        .post-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .post-meta {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            opacity: 0.95;
        }

        .post-content {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 3rem;
        }

        .post-body {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #374151;
        }

        .post-sidebar {
            display: grid;
            gap: 2rem;
        }

        .sidebar-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .sidebar-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .author-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            font-weight: 700;
        }

        .author-details h4 {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .author-details p {
            color: #64748b;
            font-size: 0.9rem;
        }

        .category-badge {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #6366f1;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            gap: 0.75rem;
        }

        @media (max-width: 768px) {
            .post-hero h1 {
                font-size: 2rem;
            }

            .post-content {
                padding: 2rem 1.5rem;
            }
        }
    </style>

    <div class="post-container">
        <a href="/posts" class="back-link">← Back to All Posts</a>

        <article>
            <div class="post-hero">
                <h1>{{ $post->title }}</h1>
                <div class="post-meta">
                    <div class="meta-item">
                        <span>👤</span>
                        <span>By {{ $post->author->name }}</span>
                    </div>
                    <div class="meta-item">
                        <span>📂</span>
                        <span>{{ $post->category->name }}</span>
                    </div>
                    <div class="meta-item">
                        <span>📅</span>
                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>

            <div class="post-content">
                <div class="post-body">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>

            <div class="post-sidebar">
                <div class="sidebar-card">
                    <h3>👤 About the Author</h3>
                    <div class="author-info">
                        <div class="author-avatar">
                            {{ strtoupper(substr($post->author->name, 0, 1)) }}
                        </div>
                        <div class="author-details">
                            <h4>{{ $post->author->name }}</h4>
                            <p>{{ $post->author->email }}</p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-card">
                    <h3>📂 Category</h3>
                    <a href="/posts?category={{ $post->category->slug }}" class="category-badge">
                        {{ $post->category->name }}
                    </a>
                </div>
            </div>
        </article>
    </div>
</x-layout>
