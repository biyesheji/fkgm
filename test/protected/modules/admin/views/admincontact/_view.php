<?php
/* @var $this AdmincontactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo $data->message; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('send_mail')); ?>:</b>
	<?php echo $data->send_mail ? '发送成功' : '发送失败' ; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatetime')); ?>:</b>
	<?php echo CHtml::encode($data->updatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo $data->status == 1 ? '已查看' : '未查看' ; ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('keyword')); ?></b>
	<?php //echo CHtml::encode($data->keyword); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?></b>
	<?php //echo CHtml::encode($data->description); ?>
	<br />

</div>