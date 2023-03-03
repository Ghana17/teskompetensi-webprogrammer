<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinik $model */

$this->title = $model->id_wilayahklinik;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah Klinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wilayah-klinik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_wilayahklinik' => $model->id_wilayahklinik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_wilayahklinik' => $model->id_wilayahklinik], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_wilayahklinik',
            'wilayah.kab_kota',
            // 'id_wilayah',
            'nama_klinik',
            'alamat_klinik',
            'nomer_telpklinik',
        ],
    ]) ?>

</div>
