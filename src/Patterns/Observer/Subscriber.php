<?php
namespace Logifire\ProgrammingPatterns\Patterns\Observer;

/**
 * Implementations of this will be the observers.
 */
interface Subscriber
{
    public function update(NewsPublisher $news_publisher): void;
}
