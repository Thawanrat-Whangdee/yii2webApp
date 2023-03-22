<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Incomes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incomes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'income_type') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'create_date') ?>

    <?= $form->field($model, 'update_date') ?>

    <?= $form->field($model, 'create_by') ?>

    <?= $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
