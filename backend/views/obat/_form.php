<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\Obat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_obat')->textInput() ?>

    <?php
    $dataPost=ArrayHelper::map(\common\models\Golongan::find()->asArray()->all(), 'id_golobat', 'nama_obat');
	echo $form->field($model, 'id_golobat')
        ->dropDownList(
            $dataPost,           
            ['id_golobat'=>'nama_obat']
        );
    ?>

    <!-- <?= $form->field($model, 'id_golobat')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'harga_obat')->textInput() ?>

    <?= $form->field($model, 'stok_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
