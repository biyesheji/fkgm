<?php
/* @var $this AdmincontactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'联系我们'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'联系我们列表', 'url'=>array('index')),
	array('label'=>'新建联系我们', 'url'=>array('create')),
	array('label'=>'更新联系我们', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该联系我们', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'所有联系我们', 'url'=>array('admin')),
);
?>

<h1>查看联系我们 ： #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		array(
			'label' => 'subject',
			'value' => $model->subject,
			),
		array(
			'label' => 'message',
			'type' => 'raw',
			'value' => $model->message,
			),
		'createtime',
		'updatetime',
		'ip',
		// 'send_mail',
		// 'status',
		array(
			'label' => 'send_mail',
			'type' => 'raw',
			'value' => $model->send_mail ? '发送成功' : '发送失败或未发送',
			),
		array(
			'label' => 'status',
			'type' => 'raw',
			'value' => $model->status ? '已查看' : '未查看' ,
			),
		// 'keyword',
		// 'description',
	),
)); ?>
