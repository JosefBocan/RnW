<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Events */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Events',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idEvents]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="events-update style="background-color: white"">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
