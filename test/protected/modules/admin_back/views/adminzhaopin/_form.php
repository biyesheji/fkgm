<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */
/* @var $form CActiveForm */
?>
<?php
Yii::app()->clientScript->registerScriptFile('/js/my97/WdatePicker.js');
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zhaopin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 是必填项.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('onfocus' => 'new WdatePicker(this)')); ?>
		<?php echo $form->error($model,'time'); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addr'); ?>
		<?php echo $form->textField($model,'addr',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xueli'); ?>
		<?php echo $form->textField($model,'xueli',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'xueli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_time'); ?>
		<?php echo $form->textField($model,'work_time',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'work_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_type'); ?>
		<?php echo $form->textField($model,'work_type',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'work_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php //echo $form->textField($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type',array(0=> '社会招聘',1=> '校园招聘'));?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'money'); ?>
		<?php echo $form->textField($model,'money',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shows'); ?>
		<?php //echo $form->textField($model,'shows'); ?>
		<?php echo $form->dropDownList($model,'shows',array(0=> '不显示',1=> '显示'));?>
		<?php echo $form->error($model,'shows'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
    UE.getEditor('Zhaopin_body',{
    	initialFrameWidth:700,
        initialFrameHeight:300,
    });
</script>