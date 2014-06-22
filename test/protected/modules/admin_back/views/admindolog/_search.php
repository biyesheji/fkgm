<?php
/* @var $this AdmindologController */
/* @var $model Dolog */
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
		<?php //echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->dropDownList($model,'name',CHtml::listData(User::model()->findAll(array('order' => 'id ASC')), 'id', 'username'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('onfocus' => 'new WdatePicker(this)')); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">

	</div>

	<div class="row">
		<?php echo $form->label($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->