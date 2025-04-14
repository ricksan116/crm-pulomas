<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\MarketingMiddleware;
use App\Http\Middleware\TeknikMiddleware;
use App\Http\Middleware\TenantMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'tenantMiddleware' => TenantMiddleware::class,
            'adminMiddleware' => AdminMiddleware::class,
            'teknikMiddleware' => TeknikMiddleware::class,
            'marketingMiddleware' => MarketingMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
