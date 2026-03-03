<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Services\TimeService;

class RestTimeController extends Controller
{
    private TimeService $timeService;
    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }
    public function getCurrentTime(): JsonResponse
    {
        $currentTime = $this->timeService->getCurrentTime();
        return response()->json([
            'currentTime' => $currentTime,
        ]);
    }
}
