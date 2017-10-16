<?php

namespace Proceso\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'usuarios/store',
        'login/store',
        'encuestas/store',
        'asesores/store',
        'supervisores/store',
        'inicio/store',
        'reportes/search'
    ];
}
