<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mass Assignment (2 cara, $fillable / $guarded)
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    // Eager Loading
    protected $with = ['author', 'category'];

    // Query Scope
    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // method when()
        // null coalesing operator (php7+)
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // 'author' alias dari 'user_id'
        return $this->belongsTo(User::class, 'user_id');
    }

    // mengubah default key pada route model binding, yang awalnya id jadi slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
