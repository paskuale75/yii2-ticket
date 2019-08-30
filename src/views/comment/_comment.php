<?php

use yii\bootstrap4\Html;

/* @var $this \yii\web\View */
/* @var $model \simialbi\yii2\ticket\models\Comment */
/* @var $index integer */

?>

<div
    class="sa-ticket-comment media p-2 m-2 rounded position-relative <?= ($index % 2 === 0) ? 'bg-light' : 'bg-white'; ?>">
    <?php if ($model->author->image): ?>
        <img src="<?= $model->author->image; ?>" alt="<?= Html::encode($model->author->name); ?>"
             class="rounded-circle mr-3" style="height: 50px; width: 50px;">
    <?php endif; ?>
    <div class="media-body">
        <strong><?= Html::encode($model->author->name); ?></strong>
        <time datetime="<?= Yii::$app->formatter->asDatetime($model->created_at, 'yyyy-MM-dd HH:mm'); ?>"
        class="text-muted small">
            <?= Yii::$app->formatter->asRelativeTime($model->created_at); ?>
        </time>

        <?= Yii::$app->formatter->asParagraphs($model->text); ?>
    </div>
</div>