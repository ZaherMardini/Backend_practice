<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\employer;
class present_job extends Model {
  use HasFactory;
 protected $guarded = [];
 

 public function employer(){
  return $this->belongsTo(employer::class);//this job belongs to employer
 }
 public function tags(){
  return $this->belongsToMany(tag::class, 'jobs_tags');
 }
}