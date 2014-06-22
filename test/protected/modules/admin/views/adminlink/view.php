<?php
/* @var $this AdminlinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'友情链接'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'友情链接列表', 'url'=>array('index')),
	array('label'=>'新建友情链接', 'url'=>array('create')),
	array('label'=>'更新该友情链接', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该友情链接', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该信息?')),
	array('label'=>'所有友情链接', 'url'=>array('admin')),
);
?>

<h1>查看友情链接 ：<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'url',
		array(
			'type' => 'raw',
			'name' =>'image',
			'value' => "<image src='".$model->image."' width='105' height='50'>",
			),
		'wight',
		array(
			'name' => 'shows',
			'value' =>$model->shows ? '显示' : '不显示',
			),
		'title',
	),
)); ?>
