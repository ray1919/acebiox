<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\QpcrOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Qpcr Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qpcr-order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Qpcr Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'timestamp',
                'label' => '订单编号',
            ],
            [
                'attribute' => 'user_id',
                'label' => '用户名',
                'value' => 'user.username',
            ],
            'user_id',
            'title',
            'timestamp:datetime',
            'gene_list:ntext',
            // 'technology',
            // 'chemistry',
            // 'application',
            // 'organism',
            // 'note:ntext',
            // 'name',
            // 'phone',
            // 'email:email',
            // 'institution',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
