<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QpcrOrder */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Qpcr Orders', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qpcr-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改订单', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])*/ ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => '订单编号',
                'value' => $model->timestamp,
            ],
            //'id',
            //'user_id',
            [
                'label' => '用户名',
                'value' => $model->user->username,
            ],
            'title',
            //'timestamp',
            [
                'label' => '下单时间',
                'value' => Yii::$app->formatter->asDatetime($model->timestamp),
            ],
            'gene_list:ntext',
            'technology',
            'chemistry',
            'application',
            'organism',
            'note:ntext',
            'name',
            'phone',
            'email:email',
            'institution',
        ],
    ]) ?>

</div>
