<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
    * The application's global HTTP middleware stack.
    *
    * @var array<int, class-string|string>
    */

    protected $middleware = [
        //\App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Htpp\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];


   /**
    * The application's global HTTP middleware stack.
    *
    * @var array<int, class-string|string>
    */

   protected $middlewareGroups =[
    'web' =>[
        \App\Http\Middleware\EncryptCookis::class,
        \Illuminate\Cookie\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrFToken::class,
        \Illuminate\Routing\Middleware\SubtituteBindings::class,

    ],
    'api '=> [
        \Illuminate\Routing\Middleware\ThrottleRequests::class.'api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,

    ],
];
     /**
    * The application's global HTTP middleware stack.
    *
    * @var array<int, class-string|string>
    */

     protected $routerMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Session\Middleware\AuthenticateSession::class,
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class ,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfauthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\EnsureFrontendRequestsAreStateful::class,
        'signed'=> \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle'=> \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified'=> \Illuminate\Auth\Middleware\EnsureEmailIIsVerifiend::class,
        //middleware personalizado
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'coordinador' => \App\Http\Middleware\Coordinador\CoordinadorMiddleware::class,

    
     ];


    };