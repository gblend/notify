<?php

namespace App\Http\Controllers\Api\V1;

use App\Observer\Consume;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\SubscriptionRequest;
use App\Models\Subscription;
use function MongoDB\BSON\toJSON;

class SubscriptionController extends Controller
{
    public function subscribeToTopic(SubscriptionRequest $subscriptionRequest)
    {
        if ($subscriptionRequest->validated()) {
            $topic = $subscriptionRequest->topic ? $subscriptionRequest->topic : 'general';
            $data = [
                'subscriber' => $subscriptionRequest->url,
                'topic' => $topic,
            ];
            try {
                Subscription::firstOrCreate($data);
                $consumer = new Consume();
                $response = $consumer->consumeMessage($topic);
                if ($response) {
                    return response()->json([
                        'status' => 'success',
                        'payload' => $response->body
                    ]);
                } else {
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Subscription failed. \'' . $topic . '\' is currently unavailable'
                    ], 400);
                }
            } catch (\Exception $exception) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Subscription operation failed. Please try again' . $exception
                ], 400);
            }
        }
    }
}
