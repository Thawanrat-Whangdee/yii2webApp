<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Line';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">
    <?= Html::a('Total of each', ['/site/bar'], ['class' => 'btn btn-success']); ?>

    <?= Html::a('Saving', ['/site/line'], ['class' => 'btn btn-warning']); ?>
</div>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['week 1', 'week 2', 'week 3', 'week 4', 'week 5', 'week 6'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>