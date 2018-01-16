<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
    protected $fillable = [
        'data_pag', 'valor', 'pessoa','plano_contas',
    ];
}
