<?php
namespace Logifire\ProgrammingPatterns\Observer;

/**
 * Observer
 */
class SmsSubscriberObserver implements SubscriberInterface
{

    public function update(NewsPublisher $news_publisher): void
    {
        echo "SMS: {$news_publisher->getLatestNews()} \n";
    }
}
