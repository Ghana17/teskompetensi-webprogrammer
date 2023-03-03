<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinik $model */

$this->title = 'Update Wilayah Klinik: ' . $model->id_wilayahklinik;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah Klinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wilayahklinik, 'url' => ['view', 'id_wilayahklinik' => $model->id_wilayahklinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wilayah-klinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
