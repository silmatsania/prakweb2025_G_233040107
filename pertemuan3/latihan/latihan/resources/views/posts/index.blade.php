<x-layout>
    <x-slot:title>
        All Posts - Laravel Blog
    </x-slot:title>

    <style>
        .page-header {
            margin-bottom: 2.5rem;
        }

        .page-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: #64748b;
            font-size: 1.05rem;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
        }

        .post-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .post-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem 1.5rem;
            color: white;
        }

        .post-card:nth-child(2n) .post-header {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .post-card:nth-child(3n) .post-header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .post-card:nth-child(4n) .post-header {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .post-card:nth-child(5n) .post-header {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }

        .post-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .post-title {
            font-size: 1.375rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.875rem;
            text-decoration: none;
            display: block;
            transition: color 0.3s ease;
            line-height: 1.3;
        }

        .post-title:hover {
            color: #6366f1;
        }

        .post-excerpt {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 1.25rem;
            flex-grow: 1;
            font-size: 0.95rem;
        }

        .post-meta {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-bottom: 1.25rem;
        }

        .badge {
            display: inline-block;
            padding: 0.375rem 0.875rem;
            border-radius: 50px;
            font-size: 0.8125rem;
            font-weight: 600;
        }

        .badge-category {
            background: #e0e7ff;
            color: #4f46e5;
        }

        .badge-author {
            background: #f3f4f6;
            color: #6b7280;
        }

        .read-more {
            display: inline-block;
            padding: 0.625rem 1.25rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-align: center;
        }

        .read-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .posts-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 2rem;
            }
        }

        .post-actions-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.625rem 1.25rem;
            border-radius: 8px; /* Match read-more radius */
            font-weight: 600;
            font-size: 0.9rem; /* Match read-more size */
            text-decoration: none;
            transition: all 0.2s;
            border: 1px solid transparent;
            cursor: pointer;
            line-height: normal;
            min-width: 80px; /* Ensure minimum width for consistency */
        }

        .btn-edit {
            background: rgba(245, 158, 11, 0.1);
            color: #d97706;
            border-color: rgba(245, 158, 11, 0.2);
        }

        .btn-edit:hover {
            background: rgba(245, 158, 11, 0.2);
            color: #b45309;
        }

        .btn-delete {
            background: rgba(225, 29, 72, 0.1);
            color: #e11d48;
            border-color: rgba(225, 29, 72, 0.2);
        }

        .btn-delete:hover {
            background: rgba(225, 29, 72, 0.2);
            color: #be123c;
        }
    </style>

    <div class="page-header">
        <h1>All Blog Posts</h1>
        <p>Explore our collection of articles and stories</p>

        @auth
        <div style="margin-top: 1rem;">
            <a href="{{ route('posts.create') }}" class="read-more" style="background: var(--primary);">+ New Post</a>
        </div>
        @endauth

        @if(session('success'))
        <div style="background: #dcfce7; color: #166534; padding: 1rem; border-radius: 0.5rem; margin-top: 1rem;">
            {{ session('success') }}
        </div>
        @endif
    </div>

    @if($posts->count())
        <div class="posts-grid">
            @foreach ($posts as $post)
            <article class="post-card">
                <div class="post-header">
                    <div class="post-meta">
                        <span class="badge badge-category">{{ $post->category->name }}</span>
                        <span class="badge badge-author">By {{ $post->author->name }}</span>
                    </div>
                </div>
                <div class="post-body">
                    <a href="/posts/{{ $post->slug }}" class="post-title">{{ $post->title }}</a>
                    <p class="post-excerpt">{{ $post->excerpt }}</p>
                    
                    <div class="post-actions-container">
                        <a href="/posts/{{ $post->slug }}" class="read-more">Read More →</a>
                        
                        @auth
                        <div style="display: flex; gap: 0.5rem;">
                            <a href="{{ route('posts.edit', $post->slug) }}" class="btn-action btn-edit">Edit</a>
                            <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-delete">Delete</button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <div class="empty-state-icon">📝</div>
            <h2>No Posts Yet</h2>
            <p>Check back later for new content!</p>
        </div>
    @endif
</x-layout>
