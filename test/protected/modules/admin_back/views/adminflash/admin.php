<?php
/* @var $this AdminflashController */
/* @var $model Flash */

$this->breadcrumbs=array(
	'flash图片'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'flash列表', 'url'=>array('index')),
	array('label'=>'新建Flash', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#flash-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>flash信息</h1>

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
	'id'=>'flash-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name' =>'shows',
			'type' =>'raw',
			'value' => '$data->shows ? 显示 : 不显示',
			),
		'alt',
		'title',
		'weight',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
