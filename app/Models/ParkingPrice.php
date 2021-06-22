<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class, 'tempat_wisata_id');
    }
}
