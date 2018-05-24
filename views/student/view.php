<?php

use yii\widgets\DetailView;
use yii\helpers\Html;



 $this->title = "Student: $model->name";
 $this->params['breadcrumbs'][] = ['label' =>'student','url'=>['/student/index']];
  $this->params['breadcrumbs'][] = $this->title;
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
  <h1><?= $this->title; ?></h1>
  <p>
  		<?=Html::a('Update',['update','id'=> $model->id],['class'=> 'btn btn-primary']) ?>
  		<?=Html::a('Delete',['delete','id'=>$model->id],[
  			'class'=>'btn btn-danger',
  			'data'=>[
  				'confirm'=>'Are you you want to permanently delete this Student?.',
  				'method'=>'post',
  			],
  		]) ?>
  </p>
  <?=DetailView::Widget(['model'=>$model,
  			'model'=> $model,
  			'attributes'=>[
  				'id',
  				'name',
  				'gender',
  				'birthdate'
  			]

  		]);