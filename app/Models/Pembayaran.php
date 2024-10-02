<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['produk_id', 'users_id', 'kategori_id', 'rules_id', 'token'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function rule()
    {
        return $this->belongsTo(Rules::class, 'rules_id');
    }
}
