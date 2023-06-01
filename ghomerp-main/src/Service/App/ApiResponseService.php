<?php

namespace App\Service\App;

use Symfony\Component\HttpFoundation\JsonResponse;

class ApiResponseService
{

    /**
     * @param bool $status
     * @param int $code
     * @param string $message
     * @param string|null $technicalMessage
     * @param null $realStatus
     * @return JsonResponse
     */
    public function getCustomResponse(bool $status, int $code, string $message, ?string $technicalMessage = null, $realStatus = null): JsonResponse
    {
        $response = [
            'status' => $status,
            'code' => $code,
            'message' => $message
        ];
        if ($technicalMessage) {
            $response["complement"] = $technicalMessage;
        }
        return new JsonResponse(
            $response,
            $realStatus ?? $code
        );
    }
}