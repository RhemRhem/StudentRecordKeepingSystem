<?php 

use yii\helpers\Html;


$this->title = "Department";
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
<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Department Name</th>
        <th>Description</th>        
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->departmentName, ['/department/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->description ?></td>       
    </tr>
    <?php endforeach; ?>
</table>
