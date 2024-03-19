<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class SucursalFilter extends ApiFilter {

    protected $safeParams  = [
        'cliente_id' => ['eq'],
    ];
}
