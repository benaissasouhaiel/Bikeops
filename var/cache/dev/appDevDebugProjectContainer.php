<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA8w4rye\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA8w4rye/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerA8w4rye.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerA8w4rye\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerA8w4rye\appDevDebugProjectContainer([
    'container.build_hash' => 'A8w4rye',
    'container.build_id' => 'f8aafb46',
    'container.build_time' => 1582571986,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA8w4rye');
