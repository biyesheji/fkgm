<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */
/* @var $form CActiveForm */
?>
<?php
Yii::app()->clientScript->registerScriptFile('/js/my97/WdatePicker.js');
?>
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('onfocus' => 'new WdatePicker(this)')); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">
	</div>


	<div class="row">
		<?php echo $form->label($model,'body'); ?>
		<?php echo $form->textField($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addr'); ?>
		<?php echo $form->textField($model,'addr',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xueli'); ?>
		<?php echo $form->textField($model,'xueli',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'work_time'); ?>
		<?php echo $form->textField($model,'work_time',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'work_type'); ?>
		<?php echo $form->textField($model,'work_type',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php //echo $form->textField($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type',array(0=> '社会招聘',1=> '校园招聘'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'money'); ?>
		<?php echo $form->textField($model,'money',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shows'); ?>
		<?php //echo $form->textField($model,'show'); ?>
		<?php echo $form->dropDownList($model,'shows',array(0=> '不显示',1=> '显示'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->