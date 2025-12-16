

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

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .category-card {
            background: white;
            padding: 2rem 1.75rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .category-card:nth-child(2n)::before {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .category-card:nth-child(3n)::before {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .category-card:nth-child(4n)::before {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .category-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.25rem;
            margin: 0 auto 1.25rem;
        }

        .category-card:nth-child(2n) .category-icon {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .category-card:nth-child(3n) .category-icon {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .category-card:nth-child(4n) .category-icon {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .category-name {
            font-size: 1.375rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .category-count {
            color: #64748b;
            font-size: 0.875rem;
            margin-bottom: 1.25rem;
        }

        .category-link {
            display: inline-block;
            padding: 0.625rem 1.25rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .category-card:nth-child(2n) .category-link {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .category-card:nth-child(3n) .category-link {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .category-card:nth-child(4n) .category-link {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .category-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        @media (max-width: 768px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 2rem;
            }
        }
    </style>

    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="mb-5 text-3xl font-bold tracking-tight text-gray-900">Post Categories</h2>
        
        <div class="mb-4">
            <a href="{{ route('categories.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                + New Category
            </a>
        </div>
        
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success!</span> {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
            <div class="bg-white rounded-lg shadow-md p-6 border border-gray-100 flex justify-between items-center">
                <a href="/categories?category={{ $category->slug }}">
                    <h2 class="text-xl font-bold text-gray-900 hover:text-indigo-600 transition">{{ $category->name }}</h2>
                    <p class="text-gray-500 text-sm mt-1">Slug: {{ $category->slug }}</p>
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('categories.edit', $category->slug) }}" class="text-amber-600 hover:text-amber-900 bg-amber-50 hover:bg-amber-100 px-3 py-1 rounded-md transition text-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->slug) }}" method="POST" onsubmit="return confirm('Delete this category?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-rose-600 hover:text-rose-900 bg-rose-50 hover:bg-rose-100 px-3 py-1 rounded-md transition text-sm">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
