<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Ask extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable=['title', 'body'];
    // protected $guarded=[]; //if i have many columns.

    // protected $table = "my_posts" ;//in this case i change the name of table to (my_posts) not [conventionNames] 
    public $timestamps = false; // stop it from work

}
