<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCategories')->dropDownList(['1' => 'Závod', '2' => 'Koncert', '3' => 'Lezecký kurz', '4' => 'Přednáška'],['prompt'=>'Vyber kategorii']) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'info')->textarea(['maxlength' => 150,'rows' => 6])->hint('Maximální počet znaků je 150') ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->widget(DateTimePicker::classname(), [

        'options' => ['placeholder' => 'Začátek události a čas'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd-hh-ii',
        ]
    ]);?>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
