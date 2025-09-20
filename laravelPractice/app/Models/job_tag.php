<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_tag extends Model
{
    /** @use HasFactory<\Database\Factories\JobTagFactory> */
    use HasFactory;
    protected $table = 'jobs_tags';
}
