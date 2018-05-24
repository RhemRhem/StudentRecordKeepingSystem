<?php 

use yii\helpers\Html;


$this->title = "Student";
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
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/student/view', 'id'=>$model->id]); ?>
        </td>  
         <td><?= $model->gender ?></td>
         <td><?= $model->birthdate ?></td>
    </tr>
    <?php endforeach; ?>
</table>