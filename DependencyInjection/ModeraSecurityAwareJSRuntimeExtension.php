<?php

namespace Modera\SecurityAwareJSRuntimeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ModeraSecurityAwareJSRuntimeExtension extends Extension
{
    const CONFIG_KEY = 'mf.securityawarejsruntime.config';

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (count($config, true) == 0) {
            throw new \RuntimeException('Bundle "ModeraSecurityAwareJSRuntimeBundle" must be configured in config.yml!');
        }

        $container->setParameter(self::CONFIG_KEY, $config);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
