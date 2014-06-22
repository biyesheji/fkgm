<?php
/* @var $this AdmincommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'产品留言'=>array('index'),
	'更多留言',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'新建留言', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>更多留言</h1>

<p>在搜索中，你可以使用这些数据库查询条件(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>array('dk' =>'dd'),
	'filter'=>$model,
	'columns'=>array(
		array(
		'name'   => 'product_id',
		'type'   => "raw",
		'value'  => 'Product::model()->findByPk($data->product_id)->name',
			),
		'name',
		'email',
		'time',
		'ip',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
