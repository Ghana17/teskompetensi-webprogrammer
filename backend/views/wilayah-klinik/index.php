<?php

use common\models\WilayahKlinik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wilayah Klinik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-klinik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wilayah Klinik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_wilayahklinik',
            'wilayah.kab_kota',
            // 'id_wilayah',
            'nama_klinik',
            'alamat_klinik',
            'nomer_telpklinik',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WilayahKlinik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_wilayahklinik' => $model->id_wilayahklinik]);
                 }
            ],
        ],
    ]); ?>


</div>
