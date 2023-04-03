<?php

namespace ContainerGpBocH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddCommentCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\AddCommentCommand' shared autowired service.
     *
     * @return \App\Command\AddCommentCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\AddCommentCommand'] = $instance = new \App\Command\AddCommentCommand($container);

        $instance->setName('app:add-comment');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}
