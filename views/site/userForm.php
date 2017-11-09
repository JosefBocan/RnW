<?php
/**
 * Created by PhpStorm.
 * User: JB-NB-02
 * Date: 26.09.2017
 * Time: 12:29
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php if(Yii::$app->session->hasFlash('success')){
    echo "<div class='alert alert-success'>";
    echo Yii::$app->session->getFlash('success');
    echo "</div>";
    }else {
    echo "<div class='alert alert-warning'>";
    echo Yii::$app->session->getFlash('warning');
    echo "</div>";
    }


?>

<?php $form = ActiveForm::begin();  ?>

<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('submit', ['class'=>'btn btn-succes']); ?>

<?php $form = ActiveForm::end(); ?>
