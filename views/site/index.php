<?php

use yii\helpers\HTml;
use app\models\Hierarchy;
use yii\helpers\Url;

/*
* @var Hierarchy $model;
*/

?>
<div class="cards">
    <?php foreach($models as $model):?>
        <div class="card card-view">
            <div class="col-lg-6">
                <?php if($model->photo != ''):?>
                    <img src="<?=$model->photo?>" class="photo" />
                <?php else: ?>
                    <img src="<?=Yii::getAlias('@web'); ?>/img/no-photo.png" class="photo" alt="no photo">
                <?php endif?>
                <p class="fio"><?=$model->name?></p>
                <p class="years-of-life"><?$model->years_of_life?></p>
            </div>
            <div class="col-lg-6">
                <div class="text">
                    <p class="description">
                        <?php $str = $model->text;
                        $str = strip_tags($str);
                        $str = mb_strimwidth($str, 0, 410, "...");
                        echo $str;
                        ?>
                    </p>
                </div>
                <div class="buttons">
                    <a href="<?= Url::to("hierarchy/tree")?>" class="button-ref">
                        <button class="btn">Древо</button>
                    </a>
                        <a href="<?= Url::to(["hierarchy/descendant", "id" => $model->id])?>" class="button-ref">
                            <button class="btn">Информация</button>
                        </a>
                </div>
            </div>
        </div>
        <!--/card-->
    <?php endforeach ?>
</div>