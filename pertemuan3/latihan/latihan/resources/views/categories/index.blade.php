<x-layout>
    <x-slot:title>Categories</x-slot:title>


    <style>
        .page-header {
            margin-bottom: 2.5rem;
        }

        .page-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: var(--text-muted);
            font-size: 1.05rem;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .category-card {
            background: var(--light);
            padding: 2rem 1.75rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
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
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .category-count {
            color: var(--text-muted);
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

        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.625rem 1.25rem;
            border-radius: 8px; /* Match category-link radius */
            font-weight: 600;
            font-size: 0.9rem; /* Match category-link size */
            text-decoration: none;
            transition: all 0.2s;
            border: 1px solid transparent;
            cursor: pointer;
            line-height: normal;
            min-width: 80px;
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
        <h1>Browse Categories</h1>
        <p>Explore posts organized by topic</p>
        
        @auth
        <div style="margin-top: 1rem;">
            <a href="{{ route('categories.create') }}" class="category-link" style="background: var(--primary);">+ New Category</a>
        </div>
        @endauth
        
        @if(session('success'))
        <div style="background: #dcfce7; color: #166534; padding: 1rem; border-radius: 0.5rem; margin-top: 1rem;">
            {{ session('success') }}
        </div>
        @endif
    </div>

<div class="categories-grid">
    {{-- Memastikan variabel $categories ada dan merupakan array/collection yang dapat diiterasi --}}
    @if (!empty($categories) && count($categories) > 0)
        @foreach ($categories as $category)
        <div class="category-card">
            <div class="category-icon">📂</div>
            <h2 class="category-name">{{ $category->name ?? 'Category Name Missing' }}</h2>
            
            {{-- Menggunakan operator null coalesce untuk menghindari error jika $category atau $category->posts adalah null --}}
            @php
                $postCount = isset($category->posts) ? $category->posts->count() : 0;
            @endphp
            
            <p class="category-count">{{ $postCount }} posts</p>
            
            <div style="display: flex; flex-direction: column; align-items: center; gap: 0.75rem;">
                {{-- Menggunakan operator null coalesce untuk mencegah error jika slug tidak ada --}}
                <a href="/posts?category={{ $category->slug ?? '' }}" class="category-link">
                    View Posts →
                </a>
                
                @auth
                <div style="display: flex; gap: 0.5rem;">
                    <a href="{{ route('categories.edit', $category->slug) }}" class="btn-action btn-edit">Edit</a>
                    <form action="{{ route('categories.destroy', $category->slug) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action btn-delete">Delete</button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
        @endforeach
    @else
        {{-- Pesan yang ditampilkan jika tidak ada kategori yang tersedia --}}
        <p style="grid-column: 1 / -1; text-align: center; color: #64748b;">No categories found.</p>
    @endif
</div>
</x-layout>

