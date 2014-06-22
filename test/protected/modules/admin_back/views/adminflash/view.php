<?php
/* @var $this AdminflashController */
/* @var $model Flash */

$this->breadcrumbs=array(
	'Flashes图片'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Flash图片列表', 'url'=>array('index')),
	array('label'=>'新建Flash', 'url'=>array('create')),
	array('label'=>'更新Flash', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除Flash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'所有Flash', 'url'=>array('admin')),
);
?>

<h1>查看 Flash #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		// 'image',
		array(
			'label' => 'image',
			'type' => 'raw',
			'value' => "<image src='".$model->image."' width='105' height='50'>",
			),
		'shows',
		'alt',
		'title',
		'weight',
		'url',
	),
)); ?>
