<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nigga extends Model
{
        protected $fillable = ["name", "skill", "bio", "bunker_id"];
    /** @use HasFactory<\Database\Factories\NiggaFactory> */
    use HasFactory;

    public function bunker(){
        return $this->belongsTo(Bunker::class);
    }
}
