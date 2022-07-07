<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $comment
 */
class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['comment'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
