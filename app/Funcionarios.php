<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model{
    Protected $fillable = [
        'funcionario', 'fone', 'dt_admissao', 'vl_salario'
    ];
}