<?php

use yii\helpers\Html;


$this->title = 'Update Department: $model->departmentName';
$this->params['breadcrumbs'][] = ['label' => 'Department', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
<div class="department-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
