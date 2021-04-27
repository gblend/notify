<?php


namespace App\Observer;

use Bschmitt\Amqp\Amqp;
use PhpAmqpLib\Message\AMQPMessage;

class Consume
{

    /**
     * Subscribe to a Topic & Consume Messages
     * @param $topic string the topic to which the consumer wants to subscribe to.
     * @return bool|mixed
     */
    public function consumeMessage($topic)
    {
        try {
            (new Amqp)->consume($topic, function ($message, $resolver) use ($topic) {
                $GLOBALS['data'] = $message;
                $resolver->acknowledge($message);

                $resolver->stopWhenProcessed();
            }, ['binding_key' => $topic]);
            return $GLOBALS['data'];
        } catch (\Exception $exception) {
            return false;
        }
    }
}
