<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXzr6qwo\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXzr6qwo/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXzr6qwo.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXzr6qwo\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXzr6qwo\appProdProjectContainer([
    'container.build_hash' => 'Xzr6qwo',
    'container.build_id' => 'd377225a',
    'container.build_time' => 1705007541,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXzr6qwo');
