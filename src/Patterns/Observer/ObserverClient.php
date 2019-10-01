<?php
namespace Logifire\ProgrammingPatterns\Patterns\Observer;

$path = __DIR__ . '/../../../vendor/autoload.php';

require $path;

/**
 * Quotes:
 * 
 * The notifying object (publisher) sends an event (publication) to all its observers (subscribers).
 * The publisher wants to maintain low coupling to the subscribers.
 */
class ObserverClient
{

    public function run(): void
    {
        $news_publisher = new NewsPublisher();
        $sms_subscriber = new SmsSubscriber();
        $email_subscriber = new EmailSubscriber();

        $news_publisher->attach($sms_subscriber);
        $news_publisher->attach($email_subscriber);

        $news_publisher->addNews('News!');

        $news_publisher->notifyObservers();
        /*
         * Outputs:
         * SMS: News! 
         * E-mail: News! 
         */

        $news_publisher->detach($sms_subscriber);
        $news_publisher->addNews('Second News!');
        $news_publisher->notifyObservers();
        /*
         * Outputs:
         * E-mail: Second News! 
         */
    }
}

(new ObserverClient())->run();
