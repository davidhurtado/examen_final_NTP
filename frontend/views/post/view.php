<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
?>
<div class="post-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'post:ntext',
            'usuario',
            'fecha',
        ],
    ]) ?>

</div>
<?php
\bedezign\yii2\audit\web\JSLoggingAsset::register($this);