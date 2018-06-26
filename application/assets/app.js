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


	

	// Get the elements
	var from_input  = $('#startingDate').pickadate({ format: 'dd/mm/yyyy' }),
		from_picker = from_input.pickadate('picker');

	var to_input  = $('#endingDate').pickadate({ format: 'dd/mm/yyyy' }),
		to_picker = to_input.pickadate('picker');

	// Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
	if ( from_picker.get('value') ) {
		to_picker.set('min', from_picker.get('select'));
	}
	if ( to_picker.get('value') ) {
		from_picker.set('max', to_picker.get('select'));
	}

	// Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
	from_picker.on('set', function(event) {
		if ( event.select ) {
			to_picker.set('min', from_picker.get('select'));
		}
		else if ( 'clear' in event ) {
			to_picker.set('min', false);
		}
	});
	to_picker.on('set', function(event) {
		if ( event.select ) {
			from_picker.set('max', to_picker.get('select'));
		}
		else if ( 'clear' in event ) {
			from_picker.set('max', false);
		}
	});

});