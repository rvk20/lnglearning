<?php

namespace ContainerPDoxLLJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaneladminControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PaneladminController' shared autowired service.
     *
     * @return \App\Controller\PaneladminController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PaneladminController.php';

        $container->services['App\\Controller\\PaneladminController'] = $instance = new \App\Controller\PaneladminController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PaneladminController', $container));

        return $instance;
    }
}
