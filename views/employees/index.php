<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p class="text-right">
        <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}{summary}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'groups',
                'value' => function($data) {
                    $result = [];
                    foreach($data->groups as $group) {
                        $result[] = $group->name;
                    }
                    return implode(', ', $result);
                },
                'enableSorting' => true,
                'filter' => ArrayHelper::map(app\models\Groups::find()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'skills',
                'value' => function($data) {
                    $result = [];
                    foreach($data->skills as $skill) {
                        $result[] = $skill->name;
                    }
                    return implode(', ', $result);
                },
                'enableSorting' => true,
                'filter' => ArrayHelper::map(\app\models\Skills::find()->all(), 'id', 'name'),
            ],
            [
                'attribute' => 'inPlace',
                'value' => function($data) { return $data->inPlace ? 'да' : 'нет'; },
                'filter' => [0 => 'нет на месте', 1 => 'на месте'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
