<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinik $model */

$this->title = 'Create Wilayah Klinik';
$this->params['breadcrumbs'][] = ['label' => 'Wilayah Klinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-klinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
