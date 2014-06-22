<?php
/* @var $this AdmincontactController */
/* @var $model Contact */
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
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime',array('onfocus' => 'new WdatePicker(this)')); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_mail'); ?>
		<?php //echo $form->textField($model,'send_mail'); ?>
		<?php echo $form->dropDownList($model,'send_mail',array(1=> '发送成功',0 => '发送失败，或者未发送'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime',array('onfocus' => 'new WdatePicker(this)')); ?>
		<img onclick="WdatePicker({el:$dp.$('d12')})" src="/js/my97/skin/datePicker.gif" width="16" height="22" align="absmiddle">
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php //echo $form->textField($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(1=>'已阅读',0=>'未阅读'));?>
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
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->