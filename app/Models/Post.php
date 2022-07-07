<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $name
 * @property mixed $subject
 * @property mixed $message
 * @property Post|mixed $image
 */
class Post extends Model
{
    use HasFactory;

//    public $timestamps = false;

    protected $fillable = ['name', 'subject', 'message', 'image'];

    protected $table = 'posts';

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
