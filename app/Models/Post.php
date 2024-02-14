<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "my_posts" ;//in this case i change the name of table to (my_posts) not [conventionNames] 
    public $timestamps = false; // stop it from work
}
