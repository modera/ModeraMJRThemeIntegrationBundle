<?php

namespace Modera\MJRThemeIntegrationBundle\Contributions;

use Modera\MJRThemeIntegrationBundle\DependencyInjection\ModeraMJRThemeIntegrationExtension;
use Sli\ExpanderBundle\Ext\ContributorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2013 Modera Foundation
 */
class JsResourcesProvider implements ContributorInterface
{
    private $themeIntegrationConfig;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->themeIntegrationConfig = $container->getParameter(ModeraMJRThemeIntegrationExtension::CONFIG_KEY);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return array(
            array(
                'order' => PHP_INT_MIN + 10,
                'resource' => $this->themeIntegrationConfig['theme_path'].'/build/modera-theme.js',
            ),
        );
    }
}
