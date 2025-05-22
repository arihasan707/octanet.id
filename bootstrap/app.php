<?php

use App\Models\Agen;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AgenMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\GenerateKomisiBulanan;
use App\Http\Middleware\BankMiddleware;
use App\Http\Middleware\GuestOnly;
use App\Services\Tes;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'agenMiddleware' => AgenMiddleware::class,
            'adminMiddleware' => AdminMiddleware::class,
            'bankMiddleware' => BankMiddleware::class,
            'guestOnly' => GuestOnly::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->call(
            new Tes
        )->everyFiveSeconds();
    })
    ->create();
