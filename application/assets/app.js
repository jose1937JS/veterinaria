$(function(){
	$('.mdb-select').material_select();

	$('[data-toggle="tooltip"]').tooltip();

	$('.chips-placeholder').material_chip({
		placeholder: '¿otra vacuna?',
		secondaryPlaceholder: '+Vacuna'
	});

	var array = [];
	$('.chips').on('chip.add', function(e, chip){
		array.push(chip.tag);
	});

	$('.chips').on('chip.delete', function(e, chip){
		let i = array.findIndex( word => word === chip.tag );
		array.splice(i, 1);
	});

	$('#ingresar').submit((e) => {
		if (array.length > 0) {
			let string = array.join(', ');
			let vac = $('#vacunas').val(string);
		}
	});


	$('#editnombremascota').click(function(){
		$('#nombre').removeAttr('disabled');
	});
	$('#editedad').click(function(){
		$('#edad').removeAttr('disabled');
	});
	$('#editcolor').click(function(){
		$('#color').removeAttr('disabled');
	});
	$('#edittipo').click(function(){
		$('#tipo').removeAttr('disabled');
	});
	$('#editraza').click(function(){
		$('#raza').removeAttr('disabled');
	});
	$('#editvacunas').click(function(){
		$('#vacuna').removeAttr('disabled');
	});
	$('#editnombreduenio').click(function(){
		$('#nombreduenio').removeAttr('disabled');
	});
	$('#editapellidoduenio').click(function(){
		$('#apellido').removeAttr('disabled');
	});
	$('#edittel').click(function(){
		$('#tel').removeAttr('disabled');
	});
	$('#editdir').click(function(){
		$('#dir').removeAttr('disabled');
	});
	$('#editsex').click(function(){
		$('#sex').removeAttr('disabled');
	});

})