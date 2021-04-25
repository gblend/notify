<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function publishMessage(PublicationRequest $publicationRequest)
    {
        if ($publicationRequest->validated()) {
            $topic = $publicationRequest->topic ? $publicationRequest->topic : 'general';
            $data = [
                'topic' => $topic,
                'messageBody' => $publicationRequest->body,
            ];
            try {
                $subscription = Publication::firstOrCreate($data);
                return response()->json([
                    'status' => 'success',
                    'message' => 'Message published successfully',
                    'data' => $subscription
                ]);
            } catch (\Exception $exception) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'publication failed. Please try again'
                ], 400);
            }
        }
    }
}
