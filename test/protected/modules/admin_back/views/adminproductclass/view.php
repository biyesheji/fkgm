<?php
/* @var $this AdminproductclassController */
/* @var $model Productclass */

$this->breadcrumbs=array(
	'产品类别'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'产品类别列表', 'url'=>array('index')),
	array('label'=>'新建产品类别', 'url'=>array('create')),
	array('label'=>'更新该产品类别信息', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该产品类别', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该产品类别?')),
	array('label'=>'所有产品类别', 'url'=>array('admin')),
);
?>

<h1> 查看产品类信息 # <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
