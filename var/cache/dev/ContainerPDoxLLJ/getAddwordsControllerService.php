<?php

namespace ContainerPDoxLLJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddwordsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AddwordsController' shared autowired service.
     *
     * @return \App\Controller\AddwordsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AddwordsController.php';

        $container->services['App\\Controller\\AddwordsController'] = $instance = new \App\Controller\AddwordsController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\AddwordsController', $container));

        return $instance;
    }
}
