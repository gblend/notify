<?php


namespace App\Providers;


use Bschmitt\Amqp\Amqp;
use Bschmitt\Amqp\Publisher;

class PublishServiceProvider
{
    public function publishMessage($topic, $payload)
    {
        $isSuccessful = true;
        try {
            (new Amqp)->publish($topic, $payload, [
                'queue' => $topic,
                'exchange_type' => 'topic',
                'exchange' => 'topic_logs',
                'exchange_durable' => false
            ]);
            return $isSuccessful;
        } catch (\Exception $exception) {
            return !$isSuccessful;
        }
    }
}
