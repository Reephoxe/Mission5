<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CommentCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CommentCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CommentCrudController'] = $instance = new \App\Controller\Admin\CommentCrudController();

        $instance->setContainer(($container->privates['.service_locator.SoiLYDQ'] ?? $container->load('get_ServiceLocator_SoiLYDQService'))->withContext('App\\Controller\\Admin\\CommentCrudController', $container));

        return $instance;
    }
}