<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\WilayahKlinik $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-klinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $dataPost=ArrayHelper::map(\common\models\Wilayah::find()->asArray()->all(), 'id_wilayah', 'kab_kota');
	echo $form->field($model, 'id_wilayah')
        ->dropDownList(
            $dataPost,           
            ['id_wilayah'=>'kab_kota']
        );
    ?>

    <!-- <?= $form->field($model, 'id_wilayah')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'nama_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_klinik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_telpklinik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
