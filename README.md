# Notify 

**Notify** is an HTTP notification system for dispatching messages between publishers and consumers who are subscribed to different topic.


## Project setup
The installation and running of the project locally:

* Clone this repo
* Open project root directory on your terminal: ```cd notify```
* Run ``composer install``
* Create ``.env`` file ```cp .env.example .env```
* Setup the database connection in the ``.env`` file
* Generate App Key ```php artisan key:generate```
* Run the migrations ```php artisan migrate```
* Download RabbitMQ server from: [Here](https://www.rabbitmq.com/download.html) and install it on your machine.
* Setup up RabbitMQ server configuration ```config/amqp.php``` or use the default setup:
   
   ````
  'host' => env('MQTT_HOST'),
  'port' => env('MQTT_PORT'),
  'username' => env('MQTT_AUTH_USERNAME'),
  'password' => env('MQTT_AUTH_PASSWORD'),
  ````

* Start the RabbitMQ server
* Start the local server ```php artisan serve```

## Publishing to a topic
* Using any API testing software e.g Insomnia, Postman etc. visit this endpoint to publish a message ```local_url:port/api/v1/publish/{topic}```
      
    Pass the message body by setting the ```body```  as key and the corresponding ```value``` as the message content
    
    Where ```{topic}``` is a string supplied as the topic which the message should be published under.
       
## Subscribing to a topic
* Using any API testing software e.g Insomnia, Postman etc. visit this endpoint to publish a message ```local_url:port/api/v1/subscribe/{topic}```
      
    Pass the message body by setting the ```url```  as key and the corresponding ```value``` as a valid url endpoint to subscribe with.
    
    Where ```{topic}``` is a string supplied as the topic which the consumer wants to subscribe to.
       

## Technologies Used
- [Advanced Message Queuing Protocol (AMQP)](https://www.amqp.org/) => The Advanced Message Queuing Protocol is an open standard application layer protocol for message-oriented middleware. The defining features of AMQP are message orientation, queuing, routing, reliability and security. This is the protocol utilized by the message broker used for this project.
    
- [RabbitMQ](https://www.rabbitmq.com/) => RabbitMQ is an open-source message-broker software that originally implemented the Advanced Message Queuing Protocol and has since been extended with a plug-in architecture to support Streaming Text Oriented Messaging Protocol, MQ Telemetry Transport, and other protocols.
 
 - [Laravel](https://laravel.com/) => Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. Laravel was used to implement the backend service and logic for notify.

