<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Geosite;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasis';

    protected $fillable = [
        'nama',
        'slug',
        'lokasi',
        'deskripsi',
        'gambar_utama',
        'tags',
        'kategori',
        'link_referensi',
        'geosite_id',
        'status',
        'admin_id'
    ];

    protected $casts = [
        'tags'   => 'array',
        'status' => 'boolean',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function geosite()
    {
        return $this->belongsTo(Geosite::class);
    }
}