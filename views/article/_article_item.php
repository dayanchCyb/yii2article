<?php
/** @var $model \app\models\Article */
?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['view', 'slug' => $model->slug]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->boody), 40) ?>
    </div>
    <hr>
</div>
