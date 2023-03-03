<?php

use common\models\Tagihan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TagihanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tagihan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tagihan',
            'tgl_transaksi',
            'nominal_tagihan',
            'tot_tagihan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tagihan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tagihan' => $model->id_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>
