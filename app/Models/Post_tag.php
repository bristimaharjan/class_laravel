<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    protected $table ='post tag';
    protected $fillable =['post_id','tag_id'];

}
