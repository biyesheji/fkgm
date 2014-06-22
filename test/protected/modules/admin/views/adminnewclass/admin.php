<?php
/* @var $this AdminnewclassController */
/* @var $model Newclass */

$this->breadcrumbs=array(
	'新闻类别'=>array('index'),
	'所有新闻类别信息',
);

$this->menu=array(
	array('label'=>'新闻类别信息列表', 'url'=>array('index')),
	array('label'=>'新建新闻类别', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#newclass-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>新闻类别信息</h1>

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
	'id'=>'newclass-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
		'name'   => 'auto',
		'type'   => "raw",
		'value'  => 'User::model()->findByPk($data->auto)->username',
			),
		'time',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
