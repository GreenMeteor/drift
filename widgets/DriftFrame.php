<?php

namespace humhub\modules\drift\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class DriftFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
   public function run()
    {
        return $this->render('driftframe');
    }
}
