<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OrionCrm\Bundle\OrionCrmBundle\Dispatcher;

use Orion\Component\Client\Factory;
use Symfony\Component\EventDispatcher\Event;

interface OrionCrmDispatcherInterface
{
    /**
     * @param Factory $factory
     * @param Event   $event
     *
     * @void
     */
    public function dispatch(Factory $factory, Event $event);
}
