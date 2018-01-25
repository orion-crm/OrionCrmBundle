<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OrionCrm\Bundle\OrionCrmBundle\EventListener;

use OrionCrm\Bundle\OrionCrmBundle\Dispatcher\OrionCrmDispatcherInterface;
use OrionCrm\Bundle\OrionCrmBundle\Dispatcher\Registry;
use Orion\Component\Client\Factory;
use Symfony\Component\EventDispatcher\Event;

class OrionCrmListener
{
    const GENERIC_EVENT = 'orion_crm.event';

    /**
     * @var Factory
     */
    protected $factory;
    /**
     * @var Registry
     */
    protected $registry;
    /**
     * @var OrionCrmDispatcherInterface
     */
    protected $dispatcher;

    /**
     * OrionCrmListener constructor.
     *
     * @param Factory  $factory
     * @param Registry $registry
     */
    public function __construct(Factory $factory, Registry $registry)
    {
        $this->factory = $factory;
        $this->registry = $registry;
    }

    /**
     * @param Event $event
     */
    public function onEvent(Event $event)
    {
        foreach ($this->registry->getDispatchers() as $dispatcher) {
            $dispatcher->dispatch($this->factory, $event);
        }
    }
}
