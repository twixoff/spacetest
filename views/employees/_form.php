<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Groups;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inPlace')->checkbox() ?>
    
    <?= $form->field($model, 'groups')->checkboxList(ArrayHelper::map(Groups::find()->all(), 'id', 'name')); ?>
    
    <?= $form->field($model, 'skills')->checkboxList(ArrayHelper::map(\app\models\Skills::find()->all(), 'id', 'name')); ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
