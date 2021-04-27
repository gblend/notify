<?php


namespace App\Observer;

use Bschmitt\Amqp\Amqp;
use PhpAmqpLib\Message\AMQPMessage;

class Consume
{

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
