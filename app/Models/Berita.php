<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Admin;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
        'sumber_gambar',
        'penulis',
        'views',
        'status',
        'admin_id',
    ];

    protected $casts = [
        'status' => 'boolean',
        'views'  => 'integer'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            $berita->slug = static::generateUniqueSlug($berita->judul);
        });

        static::updating(function ($berita) {
            $berita->slug = static::generateUniqueSlug($berita->judul, $berita->id);
        });
    }

    private static function generateUniqueSlug(string $judul, ?int $excludeId = null): string
    {
        $base  = Str::slug($judul);
        $slug  = $base;
        $count = 1;

        while (
            static::where('slug', $slug)
                ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
                ->exists()
        ) {
            $slug = $base . '-' . $count++;
        }

        return $slug;
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}