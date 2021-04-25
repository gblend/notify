<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\SubscriptionRequest;
use App\Http\Resources\Api\V1\SubscriptionResource;
use App\Models\Subscription;

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
                $subscription = Subscription::firstOrCreate($data);
                return response(new SubscriptionResource($subscription));
            } catch (\Exception $exception) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Subscription failed. Please try again'
                ], 400);
            }
        }
    }
}
