$(document).ready(function() {
			
			///////////////// Logica de funcion clic
			$(".combo_provincias li").click(function(){
					var nombre = $(this).text();
					let nombreDiv = $('<input type="text" id="provincia_seleccionada" class="form-control" value= "' + nombre + '">');
					$('#provincia_seleccionada').replaceWith($(nombreDiv));
    })
})