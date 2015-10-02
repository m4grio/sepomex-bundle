<?php

namespace m4grio\SepomexBundle\DependencyInjection;

use InvalidArgumentException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @package m4grio\SepomexBundle\DependencyInjection
 * @author  Mario Álvarez <ahoy@m4grio.me>
 */
class m4grioSepomexExtension extends Extension
{
    /**
     * @param array            $appConfig An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @throws InvalidArgumentException When provided tag is not defined in this extension
     *
     * @api
     */
    public function load(array $appConfig, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new Configuration, $appConfig);
        foreach ($config as $key => $value) {
            $parameter = sprintf('m4grio_sepomex.%s', $key);
            $container->setParameter($parameter, $value);
        }
    }
}
