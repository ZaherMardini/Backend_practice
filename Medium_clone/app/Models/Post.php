<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function readingTime(int $wpm = 100){
        $stripped = strip_tags($this->content);
        $count = Str::wordCount($stripped);
        $mins = ceil($count / $wpm);
        return max(1, $mins);
    }

  public function likes(){
    $result = DB::select("SELECT likes.post_id, COUNT(1) AS 'likes' FROM likes
                group by likes.post_id");
    collect($result);
    return $result['0']->likes;
  }
    
  public function comments(){
    $result = DB::select("SELECT comments.post_id, COUNT(1) AS 'comments' FROM comments
                group by comments.post_id");
    collect($result);
    return $result['0']->comments;
  }
}


/*
INSERT INTO likes values(1,1,1,NULL,NULL,NULL);
INSERT INTO likes values(2,2,1,NULL,NULL,NULL);
INSERT INTO likes values(3,4,1,NULL,NULL,NULL);
*/