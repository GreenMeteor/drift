<?php

namespace humhub\modules\drift;

return [
    'id' => 'drift',
    'class' => 'humhub\modules\drift\Module',
    'namespace' => 'humhub\modules\drift',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\drift\Events',
                'addDriftFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\drift\Events',
                'addDriftFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\drift\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
