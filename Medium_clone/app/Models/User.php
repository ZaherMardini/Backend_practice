<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
        'bio',
        'email',
        'password',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class, 'user_follower',
         'user_id', 'follower_id');
    }

    public function following(){
        return $this->belongsToMany(User::class, 'user_follower',
         'follower_id', 'user_id');
    }

    public function isFollowedBy(int $user_id){
        if($user_id !== $this->id){
            $followers = $this->followers;
            foreach ($followers as $follower) {
                if($follower->id === $user_id){
                    return true;
                }
            }
        }
        return false;
    }

    public function follow(User $user){
        if($this->id !== $user->id){
            $user->followers()->toggle($this);
            return true;
        }
        return false;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
