<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'tbcolaborador';
    protected $primaryKey = 'id_colaborador';
    protected $guarded = 'id_colaborador';
}
