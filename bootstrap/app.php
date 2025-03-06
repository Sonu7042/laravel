<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeChecker;
use App\Http\Middleware\CountaryChecker;
use App\Http\Middleware\setLang;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',  
    )
    
    ->withMiddleware(function (Middleware $middleware) {
        //global middleware
        // $middleware->append(AgeChecker::class);

        // group middleware
        $middleware->appendToGroup('check1', [
            AgeChecker::class,
            CountaryChecker::class,
        ]);

        $middleware->appendToGroup('setLang',setLang::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {

    })->create();
