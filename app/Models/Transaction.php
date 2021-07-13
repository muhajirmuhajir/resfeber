<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class, 'tempat_wisata_id');
    }

    public function travelers()
    {
        return $this->hasMany(TransactionTraveler::class);
    }
}
