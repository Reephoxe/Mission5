<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListFilmsOfYearCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.App\Command\ListFilmsOfYearCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.App\\Command\\ListFilmsOfYearCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:list-films-of-year', [], 'Add a short description for your command', false, function () use ($container): \App\Command\ListFilmsOfYearCommand {
            return ($container->privates['App\\Command\\ListFilmsOfYearCommand'] ?? $container->load('getListFilmsOfYearCommandService'));
        });
    }
}