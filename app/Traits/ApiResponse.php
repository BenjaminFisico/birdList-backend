<?php


namespace App\Traits;


use App\Entities\Response;
use Illuminate\Http\Response as HttpStatus;

trait ApiResponse
{
    public function successResponse($message = '', $data = null, $code = HttpStatus::HTTP_OK): Response{
        return $this->loadDataResponse($code, true, $message, $data);
    }

    public function errorResponse($message, $data = null, $code = HttpStatus::HTTP_BAD_REQUEST): Response{
        return $this->loadDataResponse($code, false, $message, $data);
    }

    private function loadDataResponse($code, $success, $message, $data): Response {
        $response = new Response();
        $response->code = $code;
        $response->ok = $success;
        $response->message = $message;
        $response->data = $data;
        return $response;
    }
}
