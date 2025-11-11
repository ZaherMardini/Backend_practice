<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function Employer(): BelongsTo{
        return $this->belongsTo(Employer::class);
    }

    public function Tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class, 'jobs_tags');
    }
    public function tag(string $name){ // I don't get it here
        $tag = Tag::firstOrCreate(['name' => strtolower($name)]);
        $this->Tags()->attach($tag);
    }
}
