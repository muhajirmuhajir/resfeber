<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['thumbnail', 'city.province'];

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function media()
    {
        return $this->hasMany(MediaTempatWisata::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(MediaTempatWisata::class)->orderBy('position');
    }

    public function mediaTempatWisatas()
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
