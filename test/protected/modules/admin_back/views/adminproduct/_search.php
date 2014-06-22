<?php
/* @var $this AdminproductController */
/* @var $model Product */
/* @var $form CActiveForm */
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
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texture'); ?>
		<?php echo $form->textField($model,'texture',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volume'); ?>
		<?php echo $form->textField($model,'volume',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'people'); ?>
		<?php echo $form->textField($model,'people',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>10000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'introduce'); ?>
		<?php echo $form->textArea($model,'introduce',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'introduce_image'); ?>
		<?php //echo $form->textField($model,'introduce_image',array('size'=>60,'maxlength'=>200)); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class_id'); ?>
		<?php //echo $form->textField($model,'class_id'); ?>
		<?php echo $form->dropDownList($model,'class_id',CHtml::listData(Productclass::model()->findAll(array('order' => 'id ASC')), 'id', 'name'));?>

	</div>

	<div class="row">
		<?php echo $form->label($model,'shows'); ?>
		<?php echo $form->textField($model,'shows'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heft'); ?>
		<?php echo $form->textField($model,'heft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recomment'); ?>
		<?php echo $form->textField($model,'recomment'); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'image_1'); ?>
		<?php //echo $form->textField($model,'image_1',array('size'=>60,'maxlength'=>200)); ?>
	<!-- </div> -->

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'image_2'); ?>
		<?php //echo $form->textField($model,'image_2',array('size'=>60,'maxlength'=>200)); ?>
	<!-- </div> -->

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'image_3'); ?>
		<?php //echo $form->textField($model,'image_3',array('size'=>60,'maxlength'=>200)); ?>
	<!-- </div> -->

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'image_4'); ?>
		<?php //echo $form->textField($model,'image_4',array('size'=>60,'maxlength'=>200)); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->label($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'click'); ?>
		<?php echo $form->textField($model,'click',array('size'=>10,'maxlength'=>10)); ?>
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