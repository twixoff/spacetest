<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = 'Добавить группу';
$this->params['breadcrumbs'][] = ['label' => 'Группы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
