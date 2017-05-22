<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QpcrOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="qpcr-order-form">

    <?php $form = ActiveForm::begin([
    'action' => '/qpcr-order/create'
]); ?>

    <?= $form->field($model, 'user_id')->hiddeninput()->label(false) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timestamp')->hiddeninput()->label(false) ?>

    <?= $form->field($model, 'gene_list')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'technology')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chemistry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institution')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
