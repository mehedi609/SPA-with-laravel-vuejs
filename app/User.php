<?php

namespace App;

use App\Model\Like;
use App\Model\Question;
use App\Model\Reply;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question()
    {
      return $this->hasMany(Question::class);
    }

    public function likes()
    {
      return $this->hasMany(Like::class);
    }

    public function replies()
    {
      return $this->hasMany(Reply::class);
    }
}
