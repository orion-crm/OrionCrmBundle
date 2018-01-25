<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OrionCrm\Bundle\OrionCrmBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class OrionCrmCompilerPass implements CompilerPassInterface
{
    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('mindy.bundle.orion_crm.dispatcher.registry')) {
            return;
        }

        $definition = $container->getDefinition('mindy.bundle.orion_crm.dispatcher.registry');
        foreach ($container->findTaggedServiceIds('orion_crm.dispatcher') as $id => $params) {
            $definition->addMethodCall('addDispatcher', [
                new Reference($id),
            ]);
        }
    }
}
