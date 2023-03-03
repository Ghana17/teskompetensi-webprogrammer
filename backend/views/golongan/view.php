<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Golongan $model */

$this->title = $model->id_golobat;
$this->params['breadcrumbs'][] = ['label' => 'Golongan Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="golongan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_golobat' => $model->id_golobat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_golobat' => $model->id_golobat], [
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
            'id_golobat',
            'nama_obat',
        ],
    ]) ?>

</div>
