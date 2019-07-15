<?php

namespace humhub\modules\drift\models;

use Yii;
use yii\base\Model;

class ConfigureForm extends Model
{

    public $jsCode;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $settingsManager = Yii::$app->settings;
        $this->jsCode = $settingsManager->get('jsCode');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['jsCode', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jsCode' => Yii::t('DriftModule.base', 'Snippet code.'),
        ];
    }

    public function loadSettings()
    {
        $this->jsCode = Yii::$app->getModule('drift')->settings->get('jsCode');
        return true;
    }

    /**
     * Saves the form
     *
     * @return boolean
     */
    public function save()
    {
        Yii::$app->getModule('drift')->settings->set('jsCode', $this->jsCode);
        return true;
    }

}
