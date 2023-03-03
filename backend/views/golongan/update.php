<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Golongan $model */

$this->title = 'Update Golongan: ' . $model->id_golobat;
$this->params['breadcrumbs'][] = ['label' => 'Golongan Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_golobat, 'url' => ['view', 'id_golobat' => $model->id_golobat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
