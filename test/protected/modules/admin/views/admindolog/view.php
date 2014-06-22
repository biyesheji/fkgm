<?php
/* @var $this AdmindologController */
/* @var $model Dolog */

$this->breadcrumbs=array(
	'操作日志'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'操作日志列表', 'url'=>array('index')),
	array('label'=>'新建操作日志', 'url'=>array('create')),
	array('label'=>'更新该操作日志', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除操作日志', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'所有操作日志', 'url'=>array('admin')),
);
?>

<h1>View 操作日志 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'type' =>'raw',
			'label' =>'操作人',
			'value' => User::model()->findByPk($model->name)->username,
			),
		'body',
		'time',
		'ip',
	),
)); ?>
