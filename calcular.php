<?php

    function MostrarFecha($dia,$numdia,$mes,$annio){

        $feriados = array($annio.'-01-01',$annio.'-05-01',$annio.'-12-25');//fechas de feriados

        $diaBus = $annio."-".$mes."-01";//armo fecha
        $prediaBus = strtotime($diaBus);//convierto el string diabus a fecha
        $diasmes   = date('t', $prediaBus);//obtengo el numero de dias del mes

        $fecha = array();//almacenar fechas
        $nombrefecha = "";//pre-fecha a mostrar
        $newnombrefecha = "";//fecha a mostrar
        $nombredia = "";//nombre de dia a mostrar
        $nombreposicion = "";//nombre de posicion de dia a mostrar
        $nombremes = "";//nombre de mes a mostrar

        //para mostrar el nombre del dia como texto
        switch($dia) {
            case 1:
                $nombredia = 'Lunes';
                break;
            case 2:
                $nombredia = 'Martes';
                break;
            case 3:
                $nombredia = 'Miercoles';
                break;
            case 4:
                $nombredia = 'Jueves';
                break;
            case 5:
                $nombredia = 'Viernes';
                break;
            case 6:
                $nombredia = 'Sabado';
                break;
            case 7:
                $nombredia = 'Domingo';
                break;
            default:
                $nombredia = 'Dia Habil';
                break;
        }

        //para mostrar el nombre de la posicion del dia como texto
        switch($numdia) {

            case 1:
                $nombreposicion = 'Primer';
                break;
            case 2:
                $nombreposicion = 'Segundo';
                break;
            case 3:
                $nombreposicion = 'Tercer';
                break;
            case 4:
                $nombreposicion = 'Cuarto';
                break;
            case 5:
                $nombreposicion = 'Quinto';
                break;
            case 'a':
                $nombreposicion = 'Antepenultimo';
                break;
            case 'p':
                $nombreposicion = 'Penultimo';
                break;
            default:
                $nombreposicion = 'Ultimo';
                break;

        }

        //para mostrar el nombre del mes como texto
        switch($mes) {

            case '01':
                $nombremes = 'Enero';
                break;
            case '02':
                $nombremes = 'Febrero';
                break;
            case '03':
                $nombremes = 'Marzo';
                break;
            case '04':
                $nombremes = 'Abril';
                break;
            case '05':
                $nombremes = 'Mayo';
                break;
            case '06':
                $nombremes = 'Junio';
                break;
            case '07':
                $nombremes = 'Julio';
                break;
            case '08':
                $nombremes = 'Agosto';
                break;
            case '09':
                $nombremes = 'Septiembre';
                break;
            case '10':
                $nombremes = 'Octubre';
                break;
            case '11':
                $nombremes = 'Noviembre';
                break;
            default:
                $nombremes = 'Diciembre';
                break;

        }

        if ($dia == 0) {//si selecciono dia habil

            for ($y=1; $y < $diasmes+1; $y++) { //ciclo para recorer el mes completo

                $diilla = $annio."-".$mes."-".$y;//armo nueva fecha
                $prediilla = strtotime($diilla);//convierto string diilla a fecha

                if (date('N', $prediilla) != 7) {//si la fecha es distinta a domingo

                    $newdiilla   = date('Y-m-d', $prediilla);// formato de fecha

                    $countfer = count($feriados);//total de numero de cadenas del array

                    $booleano = false;


                    for ($z=0; $z < $countfer; $z++) { //ciclo para recorrer todos los feriados

                        if ($feriados[$z] == $newdiilla) {//si la fecha es igual a un feriado

                            $booleano = true;//cambio de valor para el booleano para no guardar fecha

                        }

                    }

                    if ($booleano == false) {//si la fecha no es feriado

                        array_push($fecha, $newdiilla);//almaceno fecha en el array

                    }

                }

            }

            if ($numdia == "a"){//si selecciono antepenultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[2]);//convierto la fecha de la posicion 3 del array

            }
            elseif ($numdia == "p") {//si selecciono penultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[1]);//convierto la fecha de la posicion 2 del array

            }
            elseif ($numdia == "u") {//si selecciono ultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[0]);//convierto la fecha de la posicion 1 del array

            }
            elseif ($numdia == "1") {//si selecciono primera

                $nombrefecha = strtotime($fecha[0]);//convierto la fecha de la posicion 1 del array

            }
            elseif ($numdia == "2") {//si selecciono segunda

                $nombrefecha = strtotime($fecha[1]);//convierto la fecha de la posicion 2 del array

            }
            elseif ($numdia == "3") {//si selecciono tercera

                $nombrefecha = strtotime($fecha[2]);//convierto la fecha de la posicion 3 del array

            }
            elseif ($numdia == "4") {//si selecciono cuarta

                $nombrefecha = strtotime($fecha[3]);//convierto la fecha de la posicion 4 del array

            }
            elseif ($numdia == "5") {//si selecciono quinta

                $nombrefecha = strtotime($fecha[4]);//convierto la fecha de la posicion 5 del array

            }    

            $newnombrefecha   = date('d-m-Y', $nombrefecha);//formato de fecha
            echo '<h3 class="text-center">El '.$nombreposicion.' '.$nombredia.
            ' de '.$nombremes.' del '.$annio.' es el '.
            $newnombrefecha.'</h3>';//nuestro en pantalla valor final

        }else{//si selecciono un dia (Lunes, Martes...etc)

            for ($y=1; $y < $diasmes+1; $y++) { //ciclo para recorer el mes completo

                $diilla = $annio."-".$mes."-".$y;//armo nueva fecha
                $prediilla = strtotime($diilla);//convierto string diilla a fecha
              
                if (date('N', $prediilla) == $dia) {//si el dia (lunes, martes..etc) es igual a la fecha obtenida

                    $newdiilla   = date('Y-m-d', $prediilla);//formato de fecha

                    array_push($fecha, $newdiilla);//almaceno fecha en el array

                }   

            }

            if ($numdia == "a"){//si selecciono antepenultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[2]);//convierto la fecha de la posicion 3 del array

            }
            elseif ($numdia == "p") {//si selecciono penultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[1]);//convierto la fecha de la posicion 2 del array

            }
            elseif ($numdia == "u") {//si selecciono ultima

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[0]);//convierto la fecha de la posicion 1 del array

            }
            elseif ($numdia == "5") {//si posicion del dia es igual a quinto

                $reverso = array_reverse($fecha);//ordeno array invertidamente
                $nombrefecha = strtotime($reverso[0]);//convierto la fecha de la posicion 1 del array

            }
            else
            {
                
                $nombrefecha = strtotime($fecha[$numdia-1]);
                /*convierto la fecha de la posicion del munero del dia menos 1, ya
                que array cominenza desde posicion 0*/
                
            }
            
            $counfer = count($fecha);//total de numero de cadenas del array

            if ($counfer < 5 && $numdia == 5) {//si el numero de cadenas es menor a 5 y se selecciono el quinto
                echo '<h3 class="text-center">En '.$nombremes.' del '.$annio.' no hay un Quinto '.$nombredia.'</h3>';//muestro mensaje
            }
            else
            {
                
                $newnombrefecha   = date('d-m-Y', $nombrefecha);//formato de fecha
                echo '<h3 class="text-center">El '.$nombreposicion.' '.$nombredia.
                ' de '.$nombremes.' del '.$annio.' es el '.
                $newnombrefecha.'</h3>';//nuestro en pantalla valor final

            }

        }

    }
?>

