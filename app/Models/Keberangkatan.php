<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberangkatan extends Model
{
    use HasFactory;

    protected $table = 'keberangkatans';

    protected $guarded = [];

    public function kapal()
    {
        return $this->belongsTo(Kapal::class);
    }

}
