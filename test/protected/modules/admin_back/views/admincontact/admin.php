<?php
/* @var $this AdmincontactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'联系我们'=>array('index'),
	'所有',
);

$this->menu=array(
	array('label'=>'联系我们列表', 'url'=>array('index')),
	array('label'=>'新建联系我们', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>联系我们</h1>

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
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'name',
		'email',
		'subject',
		// 'message',
		'createtime',
		'updatetime',
		'ip',
		array(
			'name' =>'status',
			'value' => '$data->status ? 已读 : 未读',
			),
		array(
			'name' => 'send_mail',
			'value' => '$data->send_mail ? 已发送 : 未发送或者发送失败',
			),
		// 'status',
		// 'send_mail',
		// 'keyword',
		// 'description',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
