<?php
namespace Logifire\ProgrammingPatterns\Observer;

/**
 * Implementations of this will be the observers.
 */
interface SubscriberInterface
{
    public function update(NewsPublisher $news_publisher): void;
}
