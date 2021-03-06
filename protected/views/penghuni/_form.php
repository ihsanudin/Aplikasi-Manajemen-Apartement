<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penghuni-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'penghuni_id'); ?>
		<?php echo $form->textField($model,'penghuni_id'); ?>
		<?php echo $form->error($model,'penghuni_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_identitas_id'); ?>
		<?php echo $form->dropDownList($model,'jenis_identitas_id', CHtml::listData(jenisIdentitas::model()->findAll(), 'jenis_identitas_id',  'nama_jenis_identitas'),array('empety'=>'please select'));?>
		<?php echo $form->error($model,'jenis_identitas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_identitas'); ?>
		<?php echo $form->textField($model,'nomor_identitas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomor_identitas'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nama_depan'); ?>
		<?php echo $form->textField($model,'nama_depan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_depan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_belakang'); ?>
		<?php echo $form->textField($model,'nama_belakang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_belakang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',
			  array(
					'attribute'=>'tanggal_lahir',
					'model'=>$model,
					'options' => array(
									  'mode'=>'focus',
									  'dateFormat'=>'yy-mm-dd',
									  'showAnim' => 'slideDown',
									  ),
			'htmlOptions'=>array('size'=>30,'class'=>'date'),
				  )
			);
		?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelamin'); ?>
		<select selected="selected" name="Penghuni[kelamin]" id="Penghuni_kelamin">
		<option value="1">Pria</option>
		<option value="2">Perempuan</option>
		</select> 
		<?php //echo $form->textField($model,'kelamin'); ?>
		<?php //echo $form->error($model,'kelamin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->