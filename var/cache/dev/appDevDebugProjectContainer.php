<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCwa76xm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCwa76xm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCwa76xm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCwa76xm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCwa76xm\appDevDebugProjectContainer([
    'container.build_hash' => 'Cwa76xm',
    'container.build_id' => '7485fc07',
    'container.build_time' => 1589760414,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCwa76xm');
