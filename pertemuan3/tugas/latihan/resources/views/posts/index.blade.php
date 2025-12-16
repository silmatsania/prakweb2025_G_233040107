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
    </style>

    <div class="page-header">
        <h1>All Blog Posts</h1>
        <p>Explore our collection of articles and stories</p>
    </div>

    @if($posts->count())
        <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="mb-5 text-3xl font-bold tracking-tight text-gray-900">Latest Posts</h2>
        
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success!</span> {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100 flex flex-col h-full"> 
                <a href="{{ route('posts.show', $post->slug) }}" class="block p-6 flex-grow hover:bg-gray-50 transition">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-500 text-sm mb-4">
                        By <span class="text-indigo-600">{{ $post->author->name }}</span> 
                        in <span class="text-indigo-600">{{ $post->category->name }}</span>
                    </p>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        {{ Str::limit(strip_tags($post->body), 100) }}
                    </p>
                </a>
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex justify-end gap-3">
                    <a href="{{ route('posts.edit', $post->slug) }}" class="text-amber-600 hover:text-amber-900 font-medium text-sm transition">Edit</a>
                    <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-rose-600 hover:text-rose-900 font-medium text-sm transition">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <div class="empty-state">
            <div class="empty-state-icon">📝</div>
            <h2>No Posts Yet</h2>
            <p>Check back later for new content!</p>
        </div>
    @endif
</x-layout>
