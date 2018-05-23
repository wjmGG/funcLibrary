<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    protected $table = 't_user';

    protected $fillable = [
      'id',
      'username',
      'role_id'
    ];
    protected $primaryKey = 'id';

}
