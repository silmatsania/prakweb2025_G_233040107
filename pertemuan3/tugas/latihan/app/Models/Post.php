<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Kolom yang dilindungi dari mass assignment (hanya 'id' yang tidak boleh diisi manual)
    protected $guarded = ['id'];

    // Eager loading: Otomatis bawa author dan category setiap query post
    protected $with = ['author', 'category'];

    // Relasi Many-to-One: Post ditulis oleh satu user (author)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
        // 'user_id' adalah foreign key di tabel posts
        // Alias 'author' agar bisa akses via $post->author
    }

    // Relasi Many-to-One: Post masuk dalam satu Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
        // 'category_id' adalah foreign key di tabel posts
        // Contoh: $post->category->name
    }

    // Query Scope: Filter berdasarkan search, category, atau author
    public function scopeFilter(Builder $query, array $filters): void
    {
        // Filter berdasarkan judul (search)
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => $query->where('title', 'like', '%' . $search . '%')
        );

        // Filter berdasarkan slug category
        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) => $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );

        // Filter berdasarkan username author
        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) => $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }
}