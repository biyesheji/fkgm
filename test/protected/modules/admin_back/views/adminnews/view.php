<?php
/* @var $this AdminnewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'新建新闻', 'url'=>array('create')),
	array('label'=>'更新该新闻', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除新闻', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该新闻?')),
	array('label'=>'所有新闻', 'url'=>array('admin')),
);
?>

<h1>查看新闻 ： <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'click',
		array(
			'name' => 'auto',
			'type' => 'raw',
			'value' =>User::model()->findByPk($model->auto)->username,
			),
		array(
			'name' => 'new_class',
			'type' => 'raw',
			'value' =>Newclass::model()->findByPk($model->new_class)->name,
			),
		array(
			'name' => 'video',
			'value' => empty($model->video) ? '无视频' : '有视频',
			),
		'source',
		array(
			'name' =>'image',
			'type' => 'raw',
			'value' => "<img src='".$model->image."' widht='150' height='50' /> ",
			),
		array(
			'name' => 'shows',
			'value' => empty($model->shows) ? '不显示' : '显示',
			),
		'weight',
		'tags',
		'keyword',
		'description',
		array(
			'name' =>'body',
			'type' => 'raw',
			'value' => $model->body,
			),
	),
)); ?>
