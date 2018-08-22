<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class TetAtet extends Model
{

    protected $table = 'tet-a-tet';
    protected $fillable = ['user_id', 'message'];

}

?>