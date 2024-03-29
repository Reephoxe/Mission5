<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListFilmsCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\ListFilmsCommand' shared autowired service.
     *
     * @return \App\Command\ListFilmsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\ListFilmsCommand'] = $instance = new \App\Command\ListFilmsCommand($container);

        $instance->setName('app:list-films');
        $instance->setDescription('Show the list of all the films.');

        return $instance;
    }
}
