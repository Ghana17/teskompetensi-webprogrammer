<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinikSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-klinik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wilayahklinik') ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'nama_klinik') ?>

    <?= $form->field($model, 'alamat_klinik') ?>

    <?= $form->field($model, 'nomer_telpklinik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
