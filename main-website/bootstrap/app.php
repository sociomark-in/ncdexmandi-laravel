<?php

use App\Http\Middleware\SetGlobalTranslatorCookie;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        api: __DIR__.'/../routes/api.php',
        apiPrefix: 'api',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            // Existing web middleware (like EncryptCookies, StartSession, etc.) are usually
            // added automatically by Laravel's configuration, but you can append yours.
            // Ensure this runs *after* AddQueuedCookiesToResponse if it's implicitly there.
            // If your API project doesn't even have web middleware by default, you might
            // need to add the standard ones manually if you start using session/cookies fully.
            // For a simple cookie check/set, just appending your middleware is often enough.
            SetGlobalTranslatorCookie::class, // <-- Add your middleware here for web group
        ]);
        $middleware->encryptCookies(except: [
            'googtrans', // Add the name of your cookie here to exclude it from encryption
            // 'another_unencrypted_cookie', // Add other cookie names as needed
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Resource not found.'], 404);
            }
            return response()->view('errors.404', [], 404);
        });
        $exceptions->render(function (FlattenException $e, Request $request){
            //example of how to handle all errors.
        });
    })->create();
