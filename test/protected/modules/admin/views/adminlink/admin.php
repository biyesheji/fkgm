<?php
/* @var $this AdminlinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'友情链接'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'友情链接列表', 'url'=>array('index')),
	array('label'=>'新建友情链接', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#link-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>友情链接信息</h1>

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
	'id'=>'link-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'id',
			'htmlOptions' => array(
				'width' => 30,
				),
			),
		'name',
		'url',
		array(
			'name' =>'wight',
			'htmlOptions' => array(
				'width' => 30,
				),
			),
		array(
			'name' =>'shows',
			'type' => 'raw',
			'value' => '$data->shows ? 显示 : 不显示',
			'htmlOptions' => array(
				'width' => 30,
				),
			),
		'title',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
