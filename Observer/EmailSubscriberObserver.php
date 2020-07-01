<?php
namespace Logifire\ProgrammingPatterns\Observer;

/**
 * Observer
 */
class EmailSubscriberObserver implements SubscriberInterface
{
   
    public function update(NewsPublisher $news_publisher): void
    {
        echo "E-mail: {$news_publisher->getLatestNews()} \n";
    }
}
