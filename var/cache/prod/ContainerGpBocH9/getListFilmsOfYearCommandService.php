<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListFilmsOfYearCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\ListFilmsOfYearCommand' shared autowired service.
     *
     * @return \App\Command\ListFilmsOfYearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\ListFilmsOfYearCommand'] = $instance = new \App\Command\ListFilmsOfYearCommand($container);

        $instance->setName('app:list-films-of-year');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}