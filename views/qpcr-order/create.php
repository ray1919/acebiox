<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QpcrOrder */

$this->title = 'Create Qpcr Order';
$this->params['breadcrumbs'][] = ['label' => 'Qpcr Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qpcr-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
