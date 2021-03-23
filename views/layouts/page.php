<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="page-title">
                <a href="/">
                    <p class="main-title">Летопись русской семьи</p>
                </a>
            </div>
            <div class="menu">
                <a class="item" href="#">Пункт</a>
                <a class="item" href="#">Пункт</a>
                <a class="item" href="#">Пункт</a>
                <a class="item" href="#">Пункт</a>
                <!--Здесь должна быть иконка поиска-->
            </div>
        </div>
    </div>
</header>
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