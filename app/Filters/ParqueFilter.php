<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ParqueFilter extends ApiFilter {

    protected $safeParams  = [
        'cliente_id' => ['eq'],
        'sucursal_id' => ['eq']
    ];
}