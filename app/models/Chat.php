<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class Chat extends Model
{

    protected $table = 'chat';
    protected $fillable = ['user_id', 'message'];

}

?>