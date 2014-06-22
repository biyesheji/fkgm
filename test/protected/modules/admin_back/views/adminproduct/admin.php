<?php
/* @var $this AdminproductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'产品'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'产品列表', 'url'=>array('index')),
	array('label'=>'新建产品', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>产品信息</h1>

<p>在搜索中，你可以使用这些数据库查询条件(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'texture',
		'volume',
		'people',
		'price',
		array(
			'name' => 'shows',
			'value' => '$data->shows ? 显示 : 不显示',
			),
		'hot',
		'click',
		array(
			'name' => 'recomment',
			'value' =>'$data->recomment ? 推荐 : 不推荐',
			),
		/*
		'image',
		'introduce',
		'introduce_image',
		'price',
		'class_id',
		'shows',
		'weight',
		'heft',
		'image_1',
		'image_2',
		'image_3',
		'image_4',
		'hot',
		'click',
		'keyword',
		'description',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
