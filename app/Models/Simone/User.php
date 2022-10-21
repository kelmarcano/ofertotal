<?php

namespace App\Models\Simone;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'smn_seguridad.s_user';
    public $timestamps = false;
    protected $primaryKey = "gen_id";

}
