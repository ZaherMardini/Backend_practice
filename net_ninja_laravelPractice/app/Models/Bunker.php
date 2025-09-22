<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunker extends Model
{
    protected $fillable = ['name', 'description', 'location'];
    /** @use HasFactory<\Database\Factories\BunkerFactory> */
    use HasFactory;

    public function niggas(){
        return $this->hasMany(Nigga::class);
    }
}
