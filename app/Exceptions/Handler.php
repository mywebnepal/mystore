<?php

namespace App\Exceptions;

use Request;
use Illuminate\Auth\AuthenticationException;
use Response;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // if ($e instanceof ModelNotFoundException or $e instanceof NotFoundHttpException) {
        //     $page['page_title']       = 'mywebnepal: page not found';
        //     $page['page_description'] = 'mywebnepal: page not found';
        //     if ($request->ajax()) {
        //         return response()->json(['error' => 'Not Found'], 404);
        //     }
        //     return response()->view('errors.404', [], 404, compact(['page']));
        // }
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        $guard = array_get($exception->guards(), 0);

        switch ($guard) {
            case 'sisadmin':
                $login = "sisadmin.login";
                break;
            
            default:
                $login = 'login';
                break;
        }

        return redirect()->guest(route($login));
    }
}
