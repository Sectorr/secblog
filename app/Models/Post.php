<?php

namespace App\Models;

use Sectorr\Core\Database\Model;

class Post extends Model
{
    protected $table = 'posts';

    /**
     * Returns User that created a Post.
     *
     * @return mixed
     */
    public function user()
    {
        return User::find($this->user_id);
    }

    /**
     * Strips HTML and shortens content to given length.
     *
     * @param int $length   default: 100
     * @return string
     */
    public function shortContent($length = 100)
    {
        return substr(strip_tags($this->content), 0, $length) . '...';
    }
}