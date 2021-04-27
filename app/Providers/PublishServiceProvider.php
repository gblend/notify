<?php


namespace App\Providers;


use Bschmitt\Amqp\Amqp;
use Bschmitt\Amqp\Publisher;

class PublishServiceProvider
{
    /**
     * Publish Message to a Broker
     * @param $topic string the topic to which the message is published
     * @param $payload object the message payload
     * @return bool
     */
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
