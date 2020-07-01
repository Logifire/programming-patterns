<?php
namespace Logifire\ProgrammingPatterns\Observer;

/**
 * Publisher
 */
class NewsPublisher
{

    /**
     * @var SubscriberInterface[] 
     */
    private $subscribers = [];

    /**
     * @var string
     */
    private $latest_news = '';

    public function attach(SubscriberInterface $subscriber): void
    {
        $object_hash = spl_object_hash($subscriber);
        $this->subscribers[$object_hash] = $subscriber;
    }

    public function detach(SubscriberInterface $subscriber): void
    {
        $object_hash = spl_object_hash($subscriber);
        unset($this->subscribers[$object_hash]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($this);
        }
    }

    public function addNews(string $news): void
    {
        $this->latest_news = $news;
    }

    public function getLatestNews(): string
    {
        return $this->latest_news;
    }
}
