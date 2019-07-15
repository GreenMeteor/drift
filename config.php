<?php

namespace humhub\modules\drift;

use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\admin\widgets\AdminMenu;

return [
    'id' => 'drift',
    'class' => 'humhub\modules\drift\Module',
    'namespace' => 'humhub\modules\drift',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\drift\Events', 'addDriftFrame']
        ],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => ['humhub\modules\drift\Events', 'onAdminMenuInit']
        ]
    ]
];
?>
