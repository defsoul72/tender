<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mara extends Model
{
    use HasFactory;
    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
