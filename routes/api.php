<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/events', function (Illuminate\Http\Request $request) {
    // log incoming data
    Log::info('Received AudienceGrid Event', [
        'payload' => $request->all(),
    ]);

    // send a success response
    return response()->json(['message' => 'Event logged successfully'], 200);
});

