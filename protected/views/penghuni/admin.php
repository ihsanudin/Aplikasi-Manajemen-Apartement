<?php
/* @var $this PenghuniController */
/* @var $model Penghuni */

$this->breadcrumbs=array(
	'Penghunis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Penghuni', 'url'=>array('index')),
	array('label'=>'Create Penghuni', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('penghuni-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Penghuni</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penghuni-grid',
	'dataProvider'=>$model->with('nama_jenis_identitass')->search(),
	'filter'=>$model,
	'columns'=>array(
		'penghuni_id',
		array(
			'header'=>'Jenis Identitas',
			'name'=>'nama_jenis_identitas',
			'value'=>'$data->nama_jenis_identitass->nama_jenis_identitas',
		),
		'nomor_identitas',
		'nama_depan',
		'nama_belakang',
		'tanggal_lahir',
		array(
            'name' => 'kelamin',
			'filter' => array(1 => 'Pria', 2 => 'Perempuan'),
			'value'=>'$data->kelamin==1?"Pria": "Perempuan"',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
