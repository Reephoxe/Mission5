<?php

namespace ContainerTTPlxgo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JT8GgYGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JT8GgYG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JT8GgYG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'filmRepository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'filmRepository' => 'App\\Repository\\FilmRepository',
            'paginator' => '?',
        ]);
    }
}