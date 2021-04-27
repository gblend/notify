<?php

use PhpAmqpLib\Message\AMQPMessage;

return [

    'use' => 'production',

    'properties' => [

        'production' => [
            'host' => 'localhost',
            'port' => 5672,
            'username' => 'guest',
            'password' => 'guest',
            'vhost' => '/',
            'ssl_options' => [],
            'connect_options' => [],
            'timeout' => 0,

            'exchange' => 'amq.topic',
            'exchange_type' => 'topic',
            'exchange_passive' => false,
            'exchange_durable' => true,
            'exchange_auto_delete' => false,
            'exchange_internal' => false,
            'exchange_nowait' => false,
            'exchange_properties' => [],

            'queue_force_declare' => false,
            'queue_passive' => false,
            'queue_durable' => true,
            'queue_exclusive' => false,
            'queue_auto_delete' => false,
            'queue_nowait' => false,
            'queue_properties' => ['x-ha-policy' => ['S', 'all']],

            'message_content_type' => 'application/json',
            'message_delivery_mode' => env('AMQP_MESSAGE_DELIVERY_MODE', AMQPMessage::DELIVERY_MODE_PERSISTENT),
            'message_content_encoding' => 'UTF-8',

            'consumer_tag' => '',
            'consumer_no_local' => env('AMQP_CONSUMER_NO_LOCAL', false),
            'consumer_no_ack' => env('AMQP_CONSUMER_NO_ACK', false),
            'consumer_exclusive' => env('AMQP_CONSUMER_EXCLUSIVE', false),
            'consumer_nowait' => env('AMQP_CONSUMER_NOWAIT', false),
            'consumer_ticket' => null,
            'consumer_properties' => [],

            'qos' => env('AMQP_QOS_ENABLED', false),
            'qos_prefetch_size' => env('AMQP_QOS_PREF_SIZE', 0),
            'qos_prefetch_count' => env('AMQP_QOS_PREF_COUNT', 1),
            'qos_a_global' => env('AMQP_QOS_GLOBAL', false),
        ],

    ],

];



