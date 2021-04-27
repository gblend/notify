<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\PublicationRequest;
use App\Models\Publication;
use App\Providers\PublishServiceProvider;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Publish Message to a Topic
     *
     * This endpoint enables a publish to publish message under a specified topic.
     * @param PublicationRequest $publicationRequest FormRequest validated form request containing the message payload and topic
     * @return mixed
     */
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
                $payload = json_encode([
                    'topic' => $topic,
                    'data' => $publicationRequest->body
                ]);
                /*
                 * Publishing of message under a specified topic to the message broker.
                 *
                 */
                $client = new PublishServiceProvider();
                $isSuccessful = $client->publishMessage($topic, $payload);
                if ($isSuccessful === true) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Message published successfully',
                        'data' => $subscription
                    ]);
                } else {
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Message publishing failed. Please try again'
                    ], 400);
                }

            } catch (\Exception $exception) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Something went wrong. Please try again '
                ], 400);
            }
        }
    }
}
