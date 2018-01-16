<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recebimento extends Model
{
    //
    protected $fillable = [
        'data_receb', 'valor', 'pessoa','plano_contas',
    ];
}
