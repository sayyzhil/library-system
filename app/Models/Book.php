<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Tambahkan ini

class Book extends Model
{
    // Tambahkan 'category_id' ke dalam array ini
    protected $fillable = ['title', 'author', 'year', 'stock', 'category_id'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}