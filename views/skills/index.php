<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Навыки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skills-index">

    <p class="text-right">
        <?= Html::a('Добавить навык', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}{pager}{summary}',        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
