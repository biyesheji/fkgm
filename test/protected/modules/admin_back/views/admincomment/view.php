<?php
/* @var $this AdmincommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'产品留言'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'新建留言', 'url'=>array('create')),
	array('label'=>'更新留言', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除留言', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'更多留言', 'url'=>array('admin')),
);
?>

<h1>参看留言 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		array(
			'type' => 'raw',
			'label' => '产品名称',
			'value' => Product::model()->findByPk($model->product_id)->name,
			),
		'name',
		'email',
		array(
			'type' => 'raw',
			'label' => '留言内容',
			'value' => $model->body,
			),
		'time',
		'ip',
	),
)); ?>
