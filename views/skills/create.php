<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Skills */

$this->title = 'Добавление навыка';
$this->params['breadcrumbs'][] = ['label' => 'Навыки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skills-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
