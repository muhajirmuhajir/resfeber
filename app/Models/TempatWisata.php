<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function media()
    {
        return $this->hasMany(MediaTempatWisata::class);
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }

}
