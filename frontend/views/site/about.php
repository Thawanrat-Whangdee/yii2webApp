<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = "About";
$this->params["breadcrumbs"][] = $this->title;
?>

<style>
    :root {
  --white-color:                  #ffffff;
  --primary-color:                #535da1;
  --secondary-color:              #14B789;
  --section-bg-color:             #f9f9f9;
  --dark-color:                   #000000;
  --p-color:                      #717275;
  --border-color:                 #e9eaeb;
  --featured-border-color:        #727aab;

  --body-font-family:             'DM Sans', sans-serif;

  --h1-font-size:                 62px;
  --h2-font-size:                 48px;
  --h3-font-size:                 36px;
  --h4-font-size:                 32px;
  --h5-font-size:                 24px;
  --h6-font-size:                 22px;
  --p-font-size:                  18px;
  --menu-font-size:               12px;
  --copyright-font-size:          14px;

  --border-radius-large:          100px;
  --border-radius-medium:         20px;
  --border-radius-small:          10px;

  --font-weight-normal:           400;
  --font-weight-medium:           500;
  --font-weight-bold:             700;
}

body {
    background-color: rgb(222, 216, 184);
    font-family: var(--body-font-family); 
}

.mb-3 {
    margin-bottom: 1rem!important;
}

.about-image {
    border-radius: var(--border-radius-medium);
}


</style>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="https://assets.brandinside.asia/uploads/2019/12/shutterstock_448317910.jpg" class="about-image img-fluid" alt="">
                    </div>
                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <div class="about-thumb">
                                    <p>Founded in 2012, <b>ONM : One Night Miracle </b> has been operating at the Bangkok Art & Cultural Centre (BACC) until it closes in 20 September 1990 it opened at Central Embassy with an art space, and in 2017 was incorporated into Open House on Level 6 at Central Embassy. Since then, Open House Bookshop by Hardcover has been a world-renowned place as a premiere art bookstore. We invite you to join our mailing list to receive news of our upcoming programs and exciting new services!</p>
                                </div>
                            </div>
                </div>
            </div>
        </section>
</div>

    