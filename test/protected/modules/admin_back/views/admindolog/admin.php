<?php
/* @var $this AdmindologController */
/* @var $model Dolog */

$this->breadcrumbs=array(
	'操作日志'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'操作日志列表', 'url'=>array('index')),
	array('label'=>'新建操作日志', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dolog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>所有操作日志</h1>

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
	'id'=>'dolog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name' => 'name',
			'type' => 'raw',
			'value' =>'User::model()->findByPk($data->name)->username',
			),
		array(
			'name' => 'body',
			'type' => 'raw',
			'value' => 'mb_substr($data->body,0,10)',
 			),
		'time',
		'ip',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
