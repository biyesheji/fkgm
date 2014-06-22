<?php
/* @var $this AdminproductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'产品'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'所有产品', 'url'=>array('index')),
	array('label'=>'新建产品', 'url'=>array('create')),
	array('label'=>'更新该产品', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该产品', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除该产品?')),
	array('label'=>'所有产品', 'url'=>array('admin')),
);
?>

<h1> 参看产品详细信息#<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'texture',
		'volume',
		'people',
		array(
			'name' => 'introduce',
			'type' => 'raw',
			'value' => $model->introduce,
			),
		'hot',
		'click',
		'weight',
		'heft',
		array(
			'name' =>'recomment',
			'type' => 'raw',
			'value' =>$model->recomment ? '推荐' : '不推荐',
			),
		'price',
		array(
			'name' => 'class_id',
			'type' => 'raw',
			'value' => Productclass::model()->findByPk($model->class_id)->name,
			),
		array(
			'name' => 'shows',
			'type' => 'raw',
			'value' => $model->shows ? '显示' : '不显示',
			),
		array(
			'name' => 'image',
			'type' => 'raw',
			'value' =>"<img src='".$model->image."' width='150' heiht='30'/>",
			),
		array(
			'name' => 'introduce_image',
			'type' => 'raw',
			'value' =>"<img src='".$model->introduce_image."' width='150' heiht='30'/>",
			),
		array(
			'name' => 'image_1',
			'type' => 'raw',
			'value' =>"<img src='".$model->image_1."' width='150' heiht='30'/>",
			),
		array(
			'name' => 'image_2',
			'type' => 'raw',
			'value' =>"<img src='".$model->image_2."' width='150' heiht='30'/>",
			),
		array(
			'name' => 'image_3',
			'type' => 'raw',
			'value' =>"<img src='".$model->image_3."' width='150' heiht='30'/>",
			),
		array(
			'name' => 'image_4',
			'type' => 'raw',
			'value' =>"<img src='".$model->image_4."' width='150' heiht='30'/>",
			),
		'keyword',
		'description',
	),
)); ?>
