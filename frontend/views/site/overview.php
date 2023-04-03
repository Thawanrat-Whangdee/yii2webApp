<?php

/** @var yii\web\View $this */

use app\models\Expenses;
use app\models\Incomes;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Overview';
?>
<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Hind+Siliguri:wght@300&family=Nunito&family=Open+Sans&family=Sarabun:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Balsamiq Sans', cursive;
        }

        .card {
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            width: 40%;
            margin: 2rem auto;
            height: 560;
            border-radius: 30px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .containerB {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 20px;
        }

        .cartTotal {
            width: 150px;
            height: 560;
            border-radius: 10px;
            text-align: center;
            background-color: #0d6efd;
        }

        p {
            margin-top: 0;
            margin-bottom: 0rem;
        }

        .border {
            border-radius: 10rem;
        }
    </style>
    <script src="https://kit.fontawesome.com/c3c7a2a31a.js" crossorigin="anonymous"></script>
</head>

<?php $form = ActiveForm::begin(); ?>

<body style="background-color: #f8f9fa; font-size: 14px;">
    <div class="card" style="width: 100%; margin-top:2px;background-size: cover; background-image: url('https://cdn.pixabay.com/photo/2015/11/10/08/31/banner-1036483_1280.jpg');">
        <div class="containerB">
            <div style="font-size: 14px; margin-right: 20px; margin-top: 10px; color: #ececec; ">
                <p>Username</p><br>
                <p>Balance</p>
                <h4><b>100.00</b></h4>
                <table style="width:110%">
                    <tr>
                        <td>Amount Income</td>
                        <th></th>
                        <th>200</th>
                    </tr>
                    <tr>
                        <td>Amount Expenses</td>
                        <td></td>
                        <th>200</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="card" style="width:100%">
        <div style="margin-top:10px; margin-bottom:10px;">
            <center>
                <table style="border:1; width:80%; text-align:center;">
                    <tr>
                        <th>
                            <?= Html::a('<i class="fa-solid fa-house" style="color:#0B0B45; font-size: 1.4em; "></i>', ['/site/overview']); ?>
                        </th>
                        <th>
                            <?= Html::a('<i class="fa-regular fa-calendar" style="color:#0B0B45; font-size: 1.4em;"></i>', ['/site/calendar']); ?>
                        </th>
                        <th>
                            <?= Html::a('<i class="fa-solid fa-money-check" style="color:#0B0B45; font-size: 1.4em;"></i>', ['/site/limit']); ?>
                        </th>
                        <th>
                            <?= Html::a('<i class="fa-solid fa-chart-simple" style="color:#0B0B45; font-size: 1.4em;"></i>', ['/site/bar']); ?>
                        </th>
                    </tr>
                    <tr>
                        <td>Overview</td>
                        <td>Calendar</td>
                        <td>Limits</td>
                        <td>Analyze</td>
                    </tr>
                </table>
            </center>
        </div>
    </div>

    <h4 style="margin-right: 220px;"><b>Recently</b></h4>
    <div class=" card" style="width: 100%; margin-top:7px;">
        <div class="container">
            <div style="margin-left: 280px;">
                <?= Html::a('<i class="fa fa-chevron-right" style="margin-top:10px;"></i>', ['/site/income']); ?>
            </div>
            <table style="width:130%">
                <tr>
                    <td>Food</td>
                    <th></th>
                    <th>100</th>
                </tr>
            </table>
            <br>
        </div>
    </div>
</body>

</html>
<?php ActiveForm::end(); ?>