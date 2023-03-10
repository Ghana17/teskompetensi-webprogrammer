<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dokter $model */

$this->title = 'Create Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Dokter', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
