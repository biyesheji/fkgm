<?php
/* @var $this AdminnewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'新建新闻', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>新闻列表</h1>

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
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'click',
		array(
			'name' => 'auto',
			'value' => 'User::model()->findByPk($data->auto)->username',
			),
		array(
			'name' => 'new_class',
			'value' => 'Newclass::model()->findByPk($data->new_class)->name',
			),
		array(
			'name' => 'shows',
			'value' => '$data->shows ? 不显示 : 显示',
			),
		array(
			'name' => 'weight',
			),
		'source',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
