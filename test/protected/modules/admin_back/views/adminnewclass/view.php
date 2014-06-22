<?php
/* @var $this AdminnewclassController */
/* @var $model Newclass */

$this->breadcrumbs=array(
	'新闻类别'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'新闻类别列表', 'url'=>array('index')),
	array('label'=>'新建新闻类别', 'url'=>array('create')),
	array('label'=>'更新该新闻类别', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该新闻类别', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'所有新闻类别', 'url'=>array('admin')),
);
?>

<h1> 查看新闻类别 #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		array(
			'type' => 'raw',
			'label' => 'auto',
			'value' => User::model()->findByPk($model->auto)->username,
			),
		'time',
	),
)); ?>
