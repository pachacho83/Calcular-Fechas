function validar() {
    
    //valores de los combobox e input los paso a variables
    var cbonumdia = document.getElementById('cbonumdia').value;
    var cbodia = document.getElementById('cbodia').value;
    var cbomes = document.getElementById('cbomes').value;
    var txtannio = document.getElementById('txtannio').value;

    if (cbonumdia == ""){//si no selecciono nada en el combobox posicion del dia

        document.getElementById('mensaje').innerHTML='Seleccione la Posicion del dia'.fontcolor('red');//muestro mensaje de error  
        document.getElementById('cbonumdia').focus();//vuelvo a posesionarme en el elemento
        return false;//cancelo el submit

    } 
    
    if (cbonumdia != "a" && cbonumdia != "p" && cbonumdia != "u" && cbonumdia != "1" 
    && cbonumdia != "2" && cbonumdia != "3" && cbonumdia != "4" && cbonumdia != "5"){//si los valores distintos a los requeridos

        document.getElementById('mensaje').innerHTML='Debe Ingresar Valores Validos en Posicion del dia'.fontcolor('red');//muestro mensaje de error   
        document.getElementById('cbonumdia').focus();//vuelvo a posesionarme en el elemento
        return false;//cancelo el submit

    }

    if (cbodia == ""){//si no selecciono nada en el combobox dia

        document.getElementById('mensaje').innerHTML='Seleccione dia'.fontcolor('red');//muestro mensaje de error
        document.getElementById('cbodia').focus();//vuelvo a posesionarme en el elemento
        return false;//cancelo el submit

    } 
    
    var numero = parseInt(document.getElementById('cbodia').value);//convierto valor obtenido a numero
    
    if (numero > 7 || numero < 0 || isNaN(numero) == true){//si los valores distintos a los requeridos

        document.getElementById('mensaje').innerHTML='Debe Ingresar Valores Validos en Dia'.fontcolor('red');//muestro mensaje de error
        document.getElementById('cbodia').focus();//vuelvo a posesionarme en el elemento 
        return false;//cancelo el submit

    }

    if (cbomes == ""){//si no selecciono nada en el combobox mes

        document.getElementById('mensaje').innerHTML='Seleccione mes'.fontcolor('red');//muestro mensaje de error
        document.getElementById('cbomes').focus();//vuelvo a posesionarme en el elemento 
        return false;//cancelo el submit

    }
    
    if (cbomes != "01" && cbomes != "02" && cbomes != "03" && cbomes != "04" && cbomes != "05" && 
    cbomes != "06" && cbomes != "07" && cbomes != "08" && cbomes != "09" && cbomes != "10" && 
    cbomes != "11" && cbomes != "12"){//si los valores distintos a los requeridos

        document.getElementById('mensaje').innerHTML='Debe Ingresar Valores Validos en mes'.fontcolor('red');//muestro mensaje de error
        document.getElementById('cbomes').focus();//vuelvo a posesionarme en el elemento 
        return false;//cancelo el submit

    }

    if (txtannio == ""){//si no selecciono nada en el input año

        document.getElementById('mensaje').innerHTML='Escriba un Año'.fontcolor('red');//muestro mensaje de error
        document.getElementById('txtannio').focus();//vuelvo a posesionarme en el elemento 
        document.getElementById('txtannio').select();//selecciono el elemento
        return false;//cancelo el submit

    }
    
}

