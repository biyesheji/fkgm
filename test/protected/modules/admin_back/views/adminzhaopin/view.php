<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */

$this->breadcrumbs=array(
	'Zhaopins'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'招聘列表', 'url'=>array('index')),
	array('label'=>'新建招聘', 'url'=>array('create')),
	array('label'=>'更新招聘', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该招聘信息', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该招聘?')),
	array('label'=>'所有招聘', 'url'=>array('admin')),
);
?>

<h1> 查看招聘信息 #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'number',
		'time',
		'body',
		'addr',
		'xueli',
		'work_time',
		'work_type',
		array(
			'name' => 'type',
			'type' => 'raw',
			'value' => $model->type ? '校园招聘' : '社会招聘',
			),
		'money',
		array(
			'name' => 'shows',
			'type' => 'raw',
			'value' => $model->shows ? '显示' : '不显示',
			),
		'weight',
		'keyword',
		'description',
	),
)); ?>
