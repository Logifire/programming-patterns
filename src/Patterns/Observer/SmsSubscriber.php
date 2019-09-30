<?php
namespace Logifire\ProgrammingPatterns\Patterns\Observer;

/**
 * Observer
 */
class SmsSubscriber implements Subscriber
{

    public function update(NewsPublisher $news_publisher): void
    {
        echo "SMS: {$news_publisher->getLatestNews()} \n";
    }
}
