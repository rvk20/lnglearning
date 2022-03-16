<?php

namespace ContainerZB9xmrJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrthographyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrthographyController' shared autowired service.
     *
     * @return \App\Controller\OrthographyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OrthographyController.php';

        $container->services['App\\Controller\\OrthographyController'] = $instance = new \App\Controller\OrthographyController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\OrthographyController', $container));

        return $instance;
    }
}
