<?php
use yii\helpers\Url;

return [
    /*[
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],*/
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'usuario',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'ip',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'acceso',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'fecha',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'template'=>'{view}',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
    ],

];   