<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Tagihan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_transaksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal_tagihan')->textInput() ?>

    <?= $form->field($model, 'tot_tagihan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
