<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OrionCrm\Bundle\OrionCrmBundle\Dispatcher;

class Registry
{
    /**
     * @var array
     */
    protected $dispatchers = [];

    /**
     * @param OrionCrmDispatcherInterface $dispatcher
     */
    public function addDispatcher(OrionCrmDispatcherInterface $dispatcher)
    {
        $this->dispatchers[] = $dispatcher;
    }

    /**
     * @return OrionCrmDispatcherInterface[]
     */
    public function getDispatchers(): array
    {
        return $this->dispatchers;
    }
}
