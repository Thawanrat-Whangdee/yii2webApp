<?php

use app\models\Types;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Incomes */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    .bg-register-image {
        background: url("https://www.sketchappsources.com/resources/source-image/investing-finance-icons-fullratio.png");
        background-position: center;
        background-size: cover;
    }
    .bg-register-color {
        background-image: url('https://media.istockphoto.com/id/657808882/photo/gradient-blue-light-background.jpg?s=612x612&w=0&k=20&c=ZpJp7r_3f3BFcHgoAw2GG4QEr_BjOAlXZBmvjLYCEFM=');
        background-size: cover;
    }
</style>

<div class="container">
    <div class="site-signup">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7 bg-register-color">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Income</h1>
                            </div>
                            <?php $form = ActiveForm::begin([
                                'id' => 'form-signup',
                                'options' => ['class' => 'user']
                            ]); ?>
                                <?php  $income_type = ArrayHelper::map(Types::find()->all(), 'income_type_name','income_type_name'); ?>
                                <?= $form->field($model, 'income_type[]', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->dropDownList($income_type,['prompt'=>'Select Types',]) ?>
                                <?= $form->field($model, 'amount', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'create_date', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'update_date', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'create_by', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'update_by', [
                                    'inputOptions' => [
                                        'class' => 'form-control form-control-user',
                                        'placholder' => 'Enter your username'
                                    ]
                                ])->textInput(['autofocus' => true]) ?>

                                <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-user btn-block']) ?>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
