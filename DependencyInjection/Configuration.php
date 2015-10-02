<?php

namespace m4grio\SepomexBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @package m4grio\SepomexBundle\DependencyInjection
 * @author  Mario Álvarez <ahoy@m4grio.me>
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder;
        $rootNode = $builder->root('m4grio_sepomex');

        $rootNode
            ->children()
                ->scalarNode('entity')->isRequired()->end()
            ->end()
        ;

        return $builder;
    }
}
