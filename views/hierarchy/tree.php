<?php

use yii\helpers\Html;
use app\models\Hierarchy;
use yii\helpers\Url;

/**
 * @var Hierarchy $model
 */
$this->title = 'Tree';
?>

<style>
a {
    text-decoration: none;
    color:darkslategray;
}
.cards {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 70px;
    padding: 40px;
}
.card {
    background: #FFFFFF;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
    border-radius: 7px;
    overflow: hidden;
    margin-bottom: 30px;
    flex-basis: 31%;
    text-decoration: none;
}
.card-text {
    padding: 20px 23px 35px 23px;
}
.name-family {
    display: flex;
    justify-content: center;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
    line-height: 32px;
}
.years {
    display: flex;
    font-size: 18px;
    justify-content: center;
}
.text {
    display: flex;
    justify-content: center;
    font-size: 9px;
    word-wrap: break-word;
}
</style>
<div class="cards">
    <?php foreach($models as $model):?>
        <a href="<?= Url::to(['/hierarchy/descendant', 'id' => $model->id])?>" class="card">
            <div class="card-text">
                <p class="name-family"><?=$model->name?></p>
                <span class="years"><?=$model->years_of_life?></span>
            </div>
        </a>
    <?php endforeach?>
</div>
