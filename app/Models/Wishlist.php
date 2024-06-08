<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlists';

    // Jika tabel memiliki kolom yang tidak standar, tambahkan properti berikut
    protected $fillable = [
        'id',
        'image',
        'title',
        'content',
    ];

    // Jika ada relasi dengan model lain, tambahkan di sini
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}