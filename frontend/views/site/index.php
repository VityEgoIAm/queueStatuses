<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Queue statuses';
?>
<div class="site-index">

    <?php $form = ActiveForm::begin([
        'id' => 'queue-statuses-form',
        'options' => ['class' => 'form-horizontal'],
    ]) ?>
    
    <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'control')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
