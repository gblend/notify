<?php

use App\Http\Controllers\Api\V1\PublicationController;
use App\Http\Controllers\Api\V1\SubscriptionController;
use Illuminate\Support\Facades\Route;


Route::post('subscribe/{topic}', [SubscriptionController::class, 'subscribeToTopic'])->name('topic.subscribe');
Route::post('publish/{topic}', [PublicationController::class, 'publishMessage'])->name('topic.publish');

Route::fallback(function () {
    return response()->json([
        'status' => 'failed',
        'message' => 'URL Not Found. Please check the request url and method'
    ], 400);
});
