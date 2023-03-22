<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Incomes */

$this->title = 'Create Incomes';
$this->params['breadcrumbs'][] = ['label' => 'Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incomes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
