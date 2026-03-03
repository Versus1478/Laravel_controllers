<?php

namespace App\Services;

class TimeService
{
    public function getCurrentTime(): string
    {
        return date('Y-m-d H:i:s');
    }
}
