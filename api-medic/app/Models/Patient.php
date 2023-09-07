<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    //que cosas vamos a estar trabajando 
    protected $fillable =[
        'name',
        'age',
        'num_afi',
        'adress'
    ];

    public function Appoint(){

        //un paicente a un medico (1 a 1) hasOne
        //un paciente puede tener muchos turnos
        return $this->hasMany(Appoint::class);
    }
}
