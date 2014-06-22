<?php
/* @var $this AdmincontactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'联系我们'=>array('index'),
	'更新',
    $model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'联系我们列表', 'url'=>array('index')),
	array('label'=>'新建联系我们', 'url'=>array('create')),
	array('label'=>'查看该联系我们', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有联系我们', 'url'=>array('admin')),
);
?>

<h1>更新联系我们 ：<?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>