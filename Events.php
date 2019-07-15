<?php

namespace humhub\modules\drift;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;
use humhub\modules\drift\Assets;
use humhub\modules\drift\widgets\DriftFrame;

class Events extends BaseObject
{
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('DriftModule.base', 'Drift Settings'),
            'url' => Url::toRoute('/drift/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-headphones"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'drift' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addDriftFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(DriftFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'drift')
        ]);
    }
}
