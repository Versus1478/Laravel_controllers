<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TimeService;

class RpcTimeController extends Controller
{
    private TimeService $timeService;
    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }
    public function getCurrentTime(): string
    {
        $currentTime = $this->timeService->getCurrentTime();
        return "Aktuálny čas je: " . $currentTime;
    }
}
