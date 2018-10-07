<?php
namespace humhub\modules\drift;

use Yii;
use yii\helpers\Url;
use humhub\modules\drift\widgets\DriftFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([]);
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
