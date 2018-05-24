<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!DOCTYPE html>
<html>
<head>
<style>
body  {
    background-image: url("paper.gif");
    background-color: #cccccc;
}
</style>
</head>
<body>


</body>
</html>
<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>
   


      <?= $form->field($model, 'dept_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'courseName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>
    <?php ActiveForm::end(); ?>

</div>