<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = 'Редактирование группы: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Группы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="groups-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
