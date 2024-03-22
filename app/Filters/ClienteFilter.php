<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ClienteFilter extends ApiFilter {

    protected $safeParams  = [
        'nombre' => ['eq'],
        'vendedor_id' => ['eq'],
        'codigo' => ['eq'],
        'pagador_id' => ['eq'],
    ];
}
