<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="panel panel-default">

    <div class="panel-heading"><?= Yii::t('DriftModule.base', '<strong>Drift</strong> module configuration'); ?></div>
    <div class="panel-body">

<?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
<div class="form-group">
    <?= $form->field($model, 'jsCode')->textarea(['rows' => '30']); ?>
</div>
<hr>

<div class="form-group">
    <?= Html::submitButton(Yii::t('DriftModule.base', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']); ?>
</div>

<?php ActiveForm::end(); ?>
</div>
</div>
