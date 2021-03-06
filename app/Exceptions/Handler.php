<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Exceptions\ExceptionTrait;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Flare, Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        if ($exception instanceof CustomException) {
            //
        }

        parent::report($exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (InvalidOrderException $e, $request) {
            // 
        });
    }

    //  /**
    //  * Render an exception into an HTTP response.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function render($request, Throwable $exception)
    // {
    //     if ($request->expectsJson()) {
    //         if ($exception instanceof ModelNotFoundException) {
    //             return response()->json([
    //                 'errors' => 'Product Model not found'
    //             ],Response::HTTP_NOT_FOUND);
    //         }

    //         if ($exception instanceof NotFoundHttpException) {
    //             return response()->json([
    //                 'errors' => 'Incorect route'
    //             ],Response::HTTP_NOT_FOUND);
    //         }
    //     }
    //     return parent::render($request, $exception);
    // }
    
    use ExceptionTrait;

    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson()) {
            return $this->apiException($request,$exception);
        }
        return parent::render($request, $exception);
    }

}
