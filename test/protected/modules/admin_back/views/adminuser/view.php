<?php
/* @var $this AdminuserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'新建用户', 'url'=>array('create')),
	array('label'=>'更新用户信息', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该用户信息', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该用户?')),
	array('label'=>'所有用户', 'url'=>array('admin')),
);
?>

<h1>查看用户信息 #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		array(
			'name' => 'role',
			'type' => 'raw',
			'value' => $model->role == 1 ? '超级管理员': '普通管理员'
			),
		array(
			'name' => 'status',
			'type' => 'raw',
			'value' => $model->status ? '启用': '阻止'
			),
		'email',
	),
)); ?>
