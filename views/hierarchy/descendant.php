<?php

use yii\helpers\Html;
use app\models\Hierarchy;

/**
 * @var Hierarchy $model
 */
$this->title = 'Person';
//$model->text = str_replace();
//var_dump($model);
//$surnameTitle = explode(" ", $model->name);
//echo $tmp[0], " ", $tmp[1];
//$surnameTitle = substr_replace($surnameTitle[0], 'ы', -2);
?>
<div class="mobile-menu">
    <input type="text" class="mobile-menu__checkbox" type="checkbox" id="checkbox">
    <label for="checkbox" class="mobile-menu__btn"></label>
        <div class="mobile-menu__icon">
                <p class="menu-title">МЕНЮ</p>
            </div>
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="#" class="mobile-menu__link">Home</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#" class="mobile-menu__link">Пункт</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#" class="mobile-menu__link">Пункт 2</a>
                </li>
                <li class="mobile-menu__item">
                    <a href="#" class="mobile-menu__link">Пункт 3</a>
                </li>
            </ul>
        </div>
</div>
<div class="content mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="icon-text">
                    <a href="#"><img src="<?=Yii::getAlias('@web'); ?>/img/tree.png" class="tree" alt="tree"></a>
                    <a class="ref-back" href="tree"><p class="ref-back-text">вернуться к дереву</p></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
        <p class="surname-title"><?=$model->name?></p>
        </div>
        <div class="info">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="small-info text-center">
                        <p class="name-text"><?=$model->name?> <br /> <?=$model->years_of_life?></p>
                        <?php if($model->photo != ''):?>
                            <img src="<?=$model->photo?>" class="photo-of-a-person" />
                        <?php else: ?>
                            <img src="<?=Yii::getAlias('@web'); ?>/img/frame_no_photo.png" class="frame" alt="frame">
                        <?php endif?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="main-text">
                        <p class="main-text-first"><?=$model->text; ?></p>
                    </div>
                    <div class="buttons mx-auto">
                        <a class="top-button ref-text d-flex" href="#">Ссылка ссылка ссылка ссылка ссылка</a>
                        <a class="bottom-button ref-text d-flex" href="#">Ссылка ссылка ссылка ссылка ссылка</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>