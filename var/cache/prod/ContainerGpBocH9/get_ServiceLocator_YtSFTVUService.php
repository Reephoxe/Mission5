<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YtSFTVUService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.YtSFTVU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YtSFTVU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'film' => ['privates', '.errored..service_locator.YtSFTVU.App\\Entity\\Film', NULL, 'Cannot autowire service ".service_locator.YtSFTVU": it references class "App\\Entity\\Film" but no such service exists.'],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'film' => 'App\\Entity\\Film',
        ]);
    }
}
