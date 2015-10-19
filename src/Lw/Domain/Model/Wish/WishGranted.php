<?php

namespace Lw\Domain\Model\Wish;

use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;

class WishGranted implements DomainEvent, PublishableDomainEvent
{
    /**
     * @var WishId
     */
    private $wishId;

    public function __construct(WishId $wishId)
    {
        $this->wishId = $wishId;
        $this->occurredOn = new \DateTime();
    }

    /**
     * @return WishId
     */
    public function wishId()
    {
        return $this->wishId;
    }

    /**
     * @return \DateTime
     */
    public function occurredOn()
    {
        return $this->occurredOn;
    }
}
