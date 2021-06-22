<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function tempatWisata()
    {
        return $this->belongsTo(TempatWisata::class, 'tempat_wisata_id');
    }

}
