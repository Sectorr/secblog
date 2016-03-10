<?php

namespace App\Models;

use Sectorr\Core\Database\Model;

class User extends Model
{
    protected $table = 'users';

    /**
     * Get all posts that belong to User.
     *
     * @return mixed
     */
    public function posts()
    {
        return Post::where('user_id', $this->id)->get();
    }
}
