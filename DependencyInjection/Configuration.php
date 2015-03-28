<?php

namespace Lexxpavlov\SettingsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lexxpavlov_settings');

        $rootNode
            ->children()
                ->scalarNode('enable_short_service')
                    ->defaultTrue()
                ->end()
                ->scalarNode('html_widget')
                    ->defaultNull()
                ->end()
                ->scalarNode('cache_provider')
                    ->defaultNull()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}