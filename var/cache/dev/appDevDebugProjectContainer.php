<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSn6xsze\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSn6xsze/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSn6xsze.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSn6xsze\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSn6xsze\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Sn6xsze',
    'container.build_id' => '7bba3e25',
    'container.build_time' => 1520350026,
));
