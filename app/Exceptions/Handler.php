<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Throwable $e, Request $request) {
            // APIで発生したエラーを処理
            if ($request->is('api/*') || $request->ajax())
            {
                if ($this->isHttpException($e))
                {
                    // 返却するメッセージを設定
                    $message = $e->getMessage() ?: Response::$statusTexts[$e->getStatusCode()];

					return response()->json(['message' => $message], $e->getStatusCode());
                }
                elseif ($e instanceof ValidationException)
				{
                    // バリデーションエラー発生時のレスポンスを処理
					return $this->invalidJson($request, $e);
				}
                else
                {
                    return response()->json(['message' => 'Internal Server Error'], 500);
                }
            }
        });
    }
}
