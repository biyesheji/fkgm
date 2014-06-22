<?php
/* @var $this AdmindologController */
/* @var $model Dolog */
/* @var $form CActiveForm */
?>
<?php
Yii::app()->clientScript->registerScriptFile('/js/my97/WdatePicker.js');
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dolog-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span>是必填项.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'name'); ?>
		<?php //echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('onfocus' => 'new WdatePicker(this)')); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ip'); ?>
		<?php //echo $form->textField($model,'ip',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'ip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->