<?php
namespace Logifire\ProgrammingPatterns\Patterns\Observer;

/**
 * Observer
 */
class EmailSubscriber implements Subscriber
{
   
    public function update(NewsPublisher $news_publisher): void
    {
        echo "E-mail: {$news_publisher->getLatestNews()} \n";
    }
}
