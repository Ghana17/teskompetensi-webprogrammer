<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Golongan $model */

$this->title = 'Create Golongan';
$this->params['breadcrumbs'][] = ['label' => 'Golongan Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
