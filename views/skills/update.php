<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Skills */

$this->title = 'Редактирование навыка: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Навыки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="skills-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
