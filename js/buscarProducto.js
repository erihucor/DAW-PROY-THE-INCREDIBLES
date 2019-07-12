$(document).ready(function() {
            ///////////////// Logica de funcion clic
            $(".boton-buscador").click(function(){
                    var nombre = $('.buscador-input').val();
					if(nombre.toLowerCase() == 'agua'){
                        let elemento = $('<li> agua </li>')
                        $(".combo_productos").append(elemento);
                    }
                    if ((nombre.toLowerCase() == 'bebida') || (nombre.toLowerCase() == 'bebidas') ){
                        let elementoB = $('<li> bebida energetica </li>')
                        $(".combo_productos").append(elementoB);
                        let elementoB2 = $('<li> bebida saborizada </li>')
                        $(".combo_productos").append(elementoB2);

                    }

            })
})