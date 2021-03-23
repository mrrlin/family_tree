<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-header">
            <img src="img/photo2c.jpg" class="photo-left-top" alt="photo">
            <img src="img/photo4c.jpg" class="photo-left-center" alt="photo">
            <img src="img/photo6c.jpg" class="photo-left-bottom" alt="photo">
            <img src="img/photo3c.jpg" class="photo-right-top" alt="photo">
            <img src="img/photo5c.jpg" class="photo-right-center" alt="photo">
            <img src="img/photo1c.jpg" class="photo-right-bottom" alt="photo">
            <p class="main-title-page">Летопись </br> русской семьи</p>
</div>
<div class="contentDiv">
    <img class="arrow" id="scroll" />
</div>
    <!-- <div class="menu-main-page">
        <ul>
            <a href="#" class="menu-ref-item"><li class="menu-item">Пункт</li></a>
            <a href="#" class="menu-ref-item"><li class="menu-item">Пункт</li></a>
            <a href="#" class="menu-ref-item"><li class="menu-item">Пункт</li></a>
            <a href="#" class="menu-ref-item"><li class="menu-item">Пункт</li></a>
        </ul>
    </div> -->
<div class="content-body row">
    <?= $content ?>
</div>

<footer class="footer mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="<?=Yii::getAlias('@web'); ?>/img/footer-line.png" class="footer-line-img" alt="line">
                <a class="ref-library" href="https://library.vladimir.ru/">
                <p class="footer-text text-center mt-1">Все права защищены. ГБУК "Владимирская областная научная библиотека" 2015 - 2018</p>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>