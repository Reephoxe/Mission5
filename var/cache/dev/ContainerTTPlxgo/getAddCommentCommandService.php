<?php

namespace ContainerTTPlxgo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddCommentCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\AddCommentCommand' shared autowired service.
     *
     * @return \App\Command\AddCommentCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AddCommentCommand.php';

        $container->privates['App\\Command\\AddCommentCommand'] = $instance = new \App\Command\AddCommentCommand($container);

        $instance->setName('app:add-comment');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}