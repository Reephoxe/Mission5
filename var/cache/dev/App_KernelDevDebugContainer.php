<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTTPlxgo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTTPlxgo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTTPlxgo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTTPlxgo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTTPlxgo\App_KernelDevDebugContainer([
    'container.build_hash' => 'TTPlxgo',
    'container.build_id' => 'ec46e83a',
    'container.build_time' => 1679654902,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTTPlxgo');