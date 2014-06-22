<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */

$this->breadcrumbs=array(
	'招聘'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'招聘列表', 'url'=>array('index')),
	array('label'=>'新建招聘', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zhaopin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>招聘信息</h1>

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
	'id'=>'zhaopin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		'name',
		'number',
		'time',
		'addr',
		'xueli',
		'work_time',
		'work_type',
		array(
			'name' => 'type',
			'type' => 'raw',
			'value' => '$data->type ? 校园招聘 : 社会招聘 ',
			),
		// 'money',
		// 'body',
		// 'show',
		// 'weight',
		// 'keyword',
		// 'description',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
