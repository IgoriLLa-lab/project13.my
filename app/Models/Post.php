<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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

}
