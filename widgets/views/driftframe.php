<?php

use yii\widgets\ActiveForm;

\humhub\modules\drift\Assets::register($this);
?>

<?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
    <div class="form-group">
        <?= $form->field($model, 'jsCode'); ?>
    </div>
<?php ActiveForm::end(); ?>
