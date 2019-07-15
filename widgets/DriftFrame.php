<?php

namespace humhub\modules\drift\widgets;

use Yii;
use humhub\components\Widget;

/**
 * DriftFrame adds snippet code to all layouts extended by config.php
 *
 * @author Felli
 */
class DriftFrame extends Widget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        return Yii::$app->settings->get('jsCode');
        return $this->render('driftframe', []);
    }
}
