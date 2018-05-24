<?php

 use yii\helpers\Html;

 $this->title = "Update Student: $model->name";
 $this->params['breadcrumbs'][] = ['label' =>'student','url'=>['index']];
 $this->params['breadcrumbs'][] = ['label'=> $model->name, 'url'=>['view','id'=>$model->id]];
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
<div class="student-update">

	<h1><?= Html::encode($this->title)?></h1>

	<?= $this->render('_form',[
		'model'=> $model,

	]) ?>
	
</div>