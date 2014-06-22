<?php
/* @var $this AdminnewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<div>
		<?php echo $data->body;?>
	</div>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click')); ?>:</b>
	<?php echo CHtml::encode($data->click); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auto')); ?>:</b>
	<?php echo User::model()->findByPk($data->auto)->username;?>
	<?php //echo CHtml::encode($data->auto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_class')); ?>:</b>
	<?php echo Newclass::model()->findByPk($data->new_class)->name;?>
	<?php //echo CHtml::encode($data->new_class); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video')); ?>:</b>
	<?php echo CHtml::encode($data->video); ?>
	<?php echo $data->video ? '有视频' : '无视频';?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<!-- <b><?php //echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b> -->
	<?php //echo CHtml::encode($data->image); ?>
	<!-- <br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('shows')); ?>:</b>
	<?php //echo CHtml::encode($data->shows); ?>
	<?php echo $data->shows ? '显示': '不显示';?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyword')); ?>:</b>
	<?php echo CHtml::encode($data->keyword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
</div>