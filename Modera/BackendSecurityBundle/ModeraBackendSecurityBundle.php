<?php

namespace Modera\BackendSecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Modera\BackendSecurityBundle\DependencyInjection\ServiceAliasCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author    Sergei Vizel <sergei.vizel@modera.org>
 * @copyright 2014 Modera Foundation
 */
class ModeraBackendSecurityBundle extends Bundle
{
    const ROLE_ACCESS_BACKEND_TOOLS_SECURITY_SECTION = 'ROLE_ACCESS_BACKEND_TOOLS_SECURITY_SECTION';
    const ROLE_MANAGE_USER_PROFILES = 'ROLE_MANAGE_USER_PROFILES';
    const ROLE_MANAGE_PERMISSIONS = 'ROLE_MANAGE_PERMISSIONS';

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ServiceAliasCompilerPass());
    }
}
