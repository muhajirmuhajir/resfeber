<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourTravel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }
}
