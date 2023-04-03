<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Limit';
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
            margin-top: 10px;
        }

        .cartTotal {
            width: 150px;
            height: 560;
            border-radius: 10px;
            text-align: center;
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

<body style="background-color: #f8f9fa; font-size: 14px;">
    <div class="site-index">
        <h3 style="margin-top: 10px; margin-bottom: 20px;">Username</h3>
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
        <center>
            <div class="card" style="width: 100%; ">
                <div class="containerB">
                    <p style="margin-right: 200px;">Limited</p>
                    <h4 style="margin-bottom: 20px;"><b>250 ฿</b></h4>
                    <table>
                        <tr>
                            <th>
                                <div class="cartTotal" style="background-color: #020035; color:white; ">
                                    <p>Limit</p>
                                    <p>500 ฿</p>
                                </div>
                            </th>
                            <th>
                                <div style="margin-left: 5px;">
                                    <div class="cartTotal" style="background-color: #020035; color:white;">
                                        <p>Amount Expense</p>
                                        <p>250 ฿</p>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </table>

                </div>
            </div>
        </center>
    </div>
</body>

</html>