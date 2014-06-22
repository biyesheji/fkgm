<?php
/* @var $this AdmindologController */
/* @var $data Dolog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<?php// echo $data->id;?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php //echo CHtml::encode($data->name); ?>
	<?php echo User::model()->findByPk($data->name)->username;?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php //echo CHtml::encode($data->body); ?>
	<?php echo $data->body;?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />


</div>