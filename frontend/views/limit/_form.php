<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Limit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="limit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
