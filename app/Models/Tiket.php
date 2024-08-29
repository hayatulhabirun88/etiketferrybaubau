<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tikets';

    protected $guarded = [];

    public function penumpang()
    {
        return $this->belongsTo(Penumpang::class);
    }

    public function keberangkatan()
    {
        return $this->belongsTo(Keberangkatan::class);
    }
}
