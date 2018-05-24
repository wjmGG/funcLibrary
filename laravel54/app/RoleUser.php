<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    protected $table = 't_role';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
    ];
}
