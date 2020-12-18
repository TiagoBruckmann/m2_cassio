<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model{
    Protected $fillable = [
        'nome', 'id_clientes', 'id_funcionario', 'vl_acordado', 'vl_recebido', 'dt_pagamento'
    ];
}