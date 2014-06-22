<?php
/* @var $this AdmincommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'产品留言'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'新建留言', 'url'=>array('create')),
	array('label'=>'查看留言', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'更多留言', 'url'=>array('admin')),
);
?>

<h1>更新第<?php echo $model->id; ?>个留言</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>