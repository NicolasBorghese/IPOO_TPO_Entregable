<?php

include_once "ResponsableV.php";
include_once "Pasajero.php";
include_once "PasajeroEspecial.php";
include_once "PasajeroVIP.php";
include_once "Viaje.php";

/*/=======================================================================================\*\
||                                         FUNCIONES                                       ||
\*\=======================================================================================/*/

/**
 * Imprime en pantalla un menú de opciones y 
 * retorna un entero que representa la opcion elegida
 * 
 * @return int
 */
function menuPrincipal(){
    // int $opcionElegida
    do{
        echo "=====================================================================================\n";
        echo "||                              [Viaje Feliz]                                      ||\n";
        echo "||                                                                                 ||\n";
        echo "||                              MENÚ PRINCIPAL                                     ||\n";
        echo "||                                                                                 ||\n";
        echo "|| Ingrese por teclado el número que corresponda a la sección que desea ir:        ||\n";
        echo "||                                                                                 ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [[1]] CREAR/MODIFICAR VIAJE (vender pasajes, asignar responsable ...)           ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [[2]] OBSERVAR DATOS DEL VIAJE (ver pasajeros, ver destino ...)                 ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [[3]] QUITAR/MODIFICAR PASAJEROS DEL VIAJE (cambiar nombre pasajero ...)        ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [[0]] FINALIZAR PROGRAMA                                                        ||\n";
        echo "=====================================================================================\n";
        echo "\n";
        echo "Indique la operación que desea realizar: ";
        $opcionElegida = trim(fgets(STDIN));
        
        // OBSERVAR: el rango varía según cantidad de opciones
        if(!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 3){
            mensajeFueraDeRango();
        }
    // OBSERVAR: el rango varía según cantidad de opciones
    } while ($opcionElegida < 0 || $opcionElegida > 3);
    echo "\n";
    return $opcionElegida;  
}

/**
 * Imprime en pantalla un menú de opciones y 
 * retorna un entero que representa la opcion elegida
 * 
 * @return int
 */
function menuModificarViaje(){
    // int $opcionElegida
    do{
        echo "=====================================================================================\n";
        echo "||                              [Viaje Feliz]                                      ||\n";
        echo "||                                                                                 ||\n";
        echo "||                      MENÚ PARA CREAR/MODIFICAR VIAJE                            ||\n";
        echo "||                                                                                 ||\n";
        echo "|| Ingrese por teclado el número que corresponda a la operación que desea          ||\n";
        echo "|| realizar:                                                                       ||\n";
        echo "||                                                                                 ||\n";
        echo "|| [1] Crear un viaje nuevo                                                        ||\n";
        echo "|| [2] Vender un pasaje del viaje a un pasajero                                    ||\n";
        echo "|| [3] Asignar una nueva colección de pasajeros al viaje (reemplaza la actual)     ||\n";
        echo "|| [4] Asignar un nuevo responsable de viaje                                       ||\n";
        echo "|| [5] modificar responsable de viaje actual                                       ||\n";
        echo "|| [6] Modificar el destino del viaje                                              ||\n";
        echo "|| [7] Modificar la cantidad máxima permitida de pasajeros para el viaje           ||\n";
        echo "|| [8] Modificar el costo de pasaje para el viaje                                  ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [0] VOLVER AL MENÚ PRINCIPAL                                                    ||\n";
        echo "=====================================================================================\n";
        echo "\n";
        echo "Indique la operación que desea realizar: ";
        $opcionElegida = trim(fgets(STDIN));
        
        // OBSERVAR: el rango varía según cantidad de opciones
        if(!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 8){
            mensajeFueraDeRango();
        }
    // OBSERVAR: el rango varía según cantidad de opciones
    } while (!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 8);
    echo "\n";
    return $opcionElegida;  
}

/**
 * Imprime en pantalla un menú de opciones y 
 * retorna un entero que representa la opcion elegida
 * 
 * @return int
 */
function menuObservarViaje(){
    // int $opcionElegida
    do{
        echo "=====================================================================================\n";
        echo "||                              [Viaje Feliz]                                      ||\n";
        echo "||                                                                                 ||\n";
        echo "||                     MENÚ PARA OBSERVAR DATOS DEL VIAJE                          ||\n";
        echo "||                                                                                 ||\n";
        echo "|| Ingrese por teclado el número que corresponda a la operación que desea          ||\n";
        echo "|| realizar:                                                                       ||\n";
        echo "||                                                                                 ||\n";
        echo "|| [1] Visualizar la información completa del viaje                                ||\n";
        echo "|| [2] Visualizar la colección del pasajeros                                       ||\n";
        echo "|| [3] Visualizar el código del viaje                                              ||\n";
        echo "|| [4] Visualizar el destino del viaje                                             ||\n";
        echo "|| [5] Visualizar la cantidad máxima de pasajeros permitida                        ||\n";
        echo "|| [6] Visualizar al responsable del viaje                                         ||\n";
        echo "|| [7] Visualizar el costo por pasaje del viaje                                    ||\n";
        echo "|| [8] Visualizar la recaudación total actual del viaje                            ||\n";
        echo "|| [9] Visualizar los asientos libres                                              ||\n";
        echo "|| [10] Visualizar la cantidad de asientos disponibles                             ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [0] VOLVER AL MENÚ PRINCIPAL                                                    ||\n";
        echo "=====================================================================================\n";
        echo "\n";
        echo "Indique la operación que desea realizar: ";
        $opcionElegida = trim(fgets(STDIN));
        
        // OBSERVAR: el rango varía según cantidad de opciones
        if(!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 10){
            mensajeFueraDeRango();
        }
    // OBSERVAR: el rango varía según cantidad de opciones
    } while (!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 10);
    echo "\n";
    return $opcionElegida;  
}

/**
 * Imprime en pantalla un menú de opciones y 
 * retorna un entero que representa la opcion elegida
 * 
 * @return int
 */
function menuModificarPasajero(){
    // int $opcionElegida
    do{
        echo "=====================================================================================\n";
        echo "||                              [Viaje Feliz]                                      ||\n";
        echo "||                                                                                 ||\n";
        echo "||               MENÚ PARA QUITAR/MODIFICAR PASAJEROS DEL VIAJE                    ||\n";
        echo "||                                                                                 ||\n";
        echo "|| Ingrese por teclado el número que corresponda a la operación que desea          ||\n";
        echo "|| realizar:                                                                       ||\n";
        echo "||                                                                                 ||\n";
        echo "|| [1] Quitar un pasajero del viaje                                                ||\n";
        echo "|| [2] Quitar todos los pasajeros del viaje                                        ||\n";
        echo "|| [3] Modificar el nombre de un pasajero                                          ||\n";
        echo "|| [4] Modificar el apellido de un pasajero                                        ||\n";
        echo "|| [5] Modificar el número de teléfono de un pasajero                              ||\n";
        echo "|| [6] Modificar el número de asiento de un pasajero                               ||\n";
        echo "|| [7] Modificar campos de un pasajero especial                                    ||\n";
        echo "|| [8] Modificar campos de un pasajero VIP                                         ||\n";
        echo "|| [9] Visualizar pasajero por número de documento                                 ||\n";
        echo "|| [10] Visualizar pasajero por número de asiento                                  ||\n";
        echo "||---------------------------------------------------------------------------------||\n";
        echo "|| [0] VOLVER AL MENÚ PRINCIPAL                                                    ||\n";
        echo "=====================================================================================\n";
        echo "\n";
        echo "Indique la operación que desea realizar: ";
        $opcionElegida = trim(fgets(STDIN));
        
        // OBSERVAR: el rango varía según cantidad de opciones
        if(!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 10){
            mensajeFueraDeRango();
        }
    // OBSERVAR: el rango varía según cantidad de opciones
    } while (!ctype_digit($opcionElegida) || $opcionElegida < 0 || $opcionElegida > 10);
    echo "\n";
    return $opcionElegida;  
}

/**
 * Imprime un mensaje de error cuando la opción elegida está fuera de rango
 * o no es una posible opción válida
 * 
 */
function mensajeFueraDeRango(){
    echo "\n";
    echo "=====================================================================================\n";
    echo "|| ¡ERROR! Usted ha ingresado un valor NO válido para operar.                      ||\n";
    echo "|| Verifique las opciones del menú nuevamente.                                     ||\n";
    echo "=====================================================================================\n";
    detenerEjecucion();
}

/**
 * Este módulo solicita que se ingrese un valor con el simple objeto
 * de detener la ejecución del programa y así poder leer resultados sin que se vayan para arriba.
 * 
 */
function detenerEjecucion(){
    // string $presionarEnter
    echo "\n";

    do {
        // Mensaje de parada para leer los resultados
        echo "Presione [ENTER] para continuar. ";
        // Obligación de ingresar un valor para continuar la ejecución del código
        $presionarEnter = trim(fgets(STDIN));
    }while ($presionarEnter != "");

    echo "\n";
}

/**
 * Recibe un número y devuelve un nombre de varón (de entre 20 nombres)
 * 
 * @param int $numero
 * @return string
 */
function generaNombreVaron($numero){
    // string $nombre

    switch ($numero){
        case 1:
            $nombre = "Juan";
            break;
        case 2:
            $nombre = "Manuel";
            break;
        case 3:
            $nombre = "José";
            break;
        case 4:
            $nombre = "Antonio";
            break;
        case 5:
            $nombre = "Carlos";
            break;
        case 6:
            $nombre = "Jorge";
            break;
        case 7:
            $nombre = "Miguel";
            break;
        case 8:
            $nombre = "Pedro";
            break;
        case 9:
            $nombre = "Alberto";
            break;
        case 10:
            $nombre = "Luis";
            break;
        case 11:
            $nombre = "Daniel";
            break;
        case 12:
            $nombre = "Fernando";
            break;
        case 13:
            $nombre = "Mario";
            break;
        case 14:
            $nombre = "Sergio";
            break;
        case 15:
            $nombre = "Marcelo";
            break;
        case 16:
            $nombre = "Guillermo";
            break;
        case 17:
            $nombre = "Pablo";
            break;
        case 18:
            $nombre = "Gabriel";
            break;
        case 19:
            $nombre = "Eduardo";
            break;
        case 20:
            $nombre = "Raul";
            break;
        default:
            $nombre = "Null";
            break;
    }
    return $nombre;
}

/**
 * Recibe un número y devuelve un nombre de mujer (de entre 20 nombres)
 * 
 * @param int $numero
 * @return string
 */
function generaNombreMujer($numero){
    // string $nombre

    switch ($numero){
        case 1:
            $nombre = "María";
            break;
        case 2:
            $nombre = "Ana";
            break;
        case 3:
            $nombre = "Carolina";
            break;
        case 4:
            $nombre = "Andrea";
            break;
        case 5:
            $nombre = "laura";
            break;
        case 6:
            $nombre = "Paula";
            break;
        case 7:
            $nombre = "Martina";
            break;
        case 8:
            $nombre = "Valentina";
            break;
        case 9:
            $nombre = "Lucía";
            break;
        case 10:
            $nombre = "Sofía";
            break;
        case 11:
            $nombre = "Natalia";
            break;
        case 12:
            $nombre = "Julieta";
            break;
        case 13:
            $nombre = "Verónica";
            break;
        case 14:
            $nombre = "Daniela";
            break;
        case 15:
            $nombre = "Silvia";
            break;
        case 16:
            $nombre = "Patricia";
            break;
        case 17:
            $nombre = "Gabriela";
            break;
        case 18:
            $nombre = "Victoria";
            break;
        case 19:
            $nombre = "Micaela";
            break;
        case 20:
            $nombre = "Alejandra";
            break;
        default:
            $nombre = "Null";
            break;
    }
    return $nombre;
}

/**
 * Recibe un número y devuelve un apellido (de entre 20 apellidos)
 * 
 * @param int $numero
 * @return string
 */
function generaApellido($numero){
    // string $apellido

    switch ($numero){
        case 1:
            $apellido = "González";
            break;
        case 2:
            $apellido = "Rodríguez";
            break;
        case 3:
            $apellido = "García";
            break;
        case 4:
            $apellido = "Fernández";
            break;
        case 5:
            $apellido = "López";
            break;
        case 6:
            $apellido = "Martínez";
            break;
        case 7:
            $apellido = "Pérez";
            break;
        case 8:
            $apellido = "Gómez";
            break;
        case 9:
            $apellido = "Sánchez";
            break;
        case 10:
            $apellido = "Romero";
            break;
        case 11:
            $apellido = "Díaz";
            break;
        case 12:
            $apellido = "Torres";
            break;
        case 13:
            $apellido = "Flores";
            break;
        case 14:
            $apellido = "Álvarez";
            break;
        case 15:
            $apellido = "Castro";
            break;
        case 16:
            $apellido = "Ruiz";
            break;
        case 17:
            $apellido = "Ramírez";
            break;
        case 18:
            $apellido = "Acosta";
            break;
        case 19:
            $apellido = "Vázquez";
            break;
        case 20:
            $apellido = "Herrera";
            break;
        default:
            $apellido = "Null";
            break;
    }
    return $apellido;
}

/**
 * Pide los datos para crear un pasajero, recibe el último número de ticket
 * y retorna un objeto de tipo Pasajero
 * 
 * @param int $ultimoTicket
 * 
 * @return Pasajero
 */
function crearPasajero($ultimoTicket){
    //boolean $permitido, $servicioSilla, $servicioAsistencia, $servicioComida
    //string $nombre, $apellido, $documento, $telefono
    //int $numeroAsiento, $numeroTicket, $opcionElegida, $nroViajeroFrecuente, $cantMillas
    echo "A continuación ingrese los datos del pasajero\n\n";

    echo "Nombre del pasajero: ";
    $nombre = trim(fgets(STDIN));
    echo "Apellido del pasajero: ";
    $apellido = trim(fgets(STDIN));
    do{
        $permitido = true;
        echo "Número de documento del pasajero (campo obligatorio): ";
        $documento = trim(fgets(STDIN));
        if($documento == ""){
            $permitido = false;
            echo "ERROR: No puede ingresar un número de documento nulo.\n";
        }
    } while (!$permitido);
    echo "Teléfono del pasajero: ";
    $telefono = trim(fgets(STDIN));
    do{
        $permitido = true;
        echo "Número de asiento elegido (campo con validación): ";
        $numeroAsiento = trim(fgets(STDIN));
        if(!ctype_digit($numeroAsiento) || $numeroAsiento < 1){
            $permitido = false;
            echo "ERROR: valor ingresado para asiento elegido inválido\n";
        }
    } while (!$permitido);

    $numeroAsiento = (int)$numeroAsiento;
    $ultimoTicket++;

    do{
        $permitido = true;
        echo "=====================================================================================\n";
        echo "||             Indique que tipo de pasaje desea adquirir ingresando:               ||\n";
        echo "||                                                                                 ||\n";
        echo "|| [1] Pasaje estandar                                                             ||\n";
        echo "|| [2] Pasaje VIP                                                                  ||\n";
        echo "|| [3] Pasaje con servicio especiales                                              ||\n";
        echo "=====================================================================================\n";
        echo "Opcion elegida: ";
        $opcionElegida = trim(fgets(STDIN));

        switch($opcionElegida){
            case 1:
                $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono, $numeroAsiento, $ultimoTicket);
                break;
            case 2:
                echo "Ingrese su número de viajero frecuente: ";
                $nroViajeroFrecuente = trim(fgets(STDIN));
                do{
                    $permitido = true;
                    echo "Ingrese la cantidad de millas (campo con validación): ";
                    $cantMillas = trim(fgets(STDIN));
                    if(!ctype_digit($cantMillas) || $cantMillas < 0){
                        $permitido = false;
                        echo "ERROR: valor ingresado para cantidad de millas inválido\n";
                    }
                } while (!$permitido);
                $cantMillas = (int)$cantMillas;
                $pasajero = new PasajeroVIP($nombre, $apellido, $documento, $telefono, 
                $numeroAsiento, $ultimoTicket, $nroViajeroFrecuente, $cantMillas);
                break;
            case 3:
                echo "Ingrese \"SI\" para los servicios que desea contratar\n";
                echo "Servicio de silla de ruedas: ";
                $servicioSilla = trim(fgets(STDIN));
                echo "Servicio de asistencia para embarque/desembarque: ";
                $servicioAsistencia = trim(fgets(STDIN));
                echo "Servicio de comida especial: ";
                $servicioComida = trim(fgets(STDIN));

                $reqSilla = false;
                $reqAsistencia = false;
                $reqComida = false;

                if(strtolower($servicioSilla) == "si"){
                    $reqSilla = true;
                }
                if(strtolower($servicioAsistencia) == "si"){
                    $reqAsistencia = true;
                }
                if(strtolower($servicioComida) == "si"){
                    $reqComida = true;
                }

                if(!$reqSilla && !$reqAsistencia && !$reqComida){
                    $pasajero = new Pasajero($nombre, $apellido, $documento, $telefono, 
                    $numeroAsiento, $ultimoTicket);
                } else {
                    $pasajero = new PasajeroEspecial($nombre, $apellido, $documento, $telefono, 
                    $numeroAsiento, $ultimoTicket, $reqSilla, $reqAsistencia, $reqComida);
                }

                break;
            default:
                $permitido = false;
                mensajeFueraDeRango();
                break;
        }

    }while (!$permitido);

    return $pasajero;
}

/**
 * Pide los datos para crear un responsable y retorna un objeto de tipo ResponsableV
 * Recibe un número de empleado
 * 
 * @param int $numeroEmpleado
 * 
 * @return ResponsableV
 */
function crearResponsable($numeroEmpleado){
    //ResponsableV $responsable
    //string $nombre, $apellido, 
    //int $numeroEmpleado, $numeroLicencia

    echo "Ingrese los datos del responsable para el viaje\n\n";
    echo "Nombre responsable: ";
    $nombre = trim(fgets(STDIN));
    echo "Apellido responsable: ";
    $apellido = trim(fgets(STDIN));
    echo "Número de licencia: ";
    $numeroLicencia = trim(fgets(STDIN));

    $responsable = new ResponsableV($numeroEmpleado, $numeroLicencia, $nombre, $apellido);
    
    return $responsable;
}

/**
 * Crea un arreglo automático de pasajeros y lo retorna
 * Recibe la cantidad de pasajeros que se desean crear, la cantidad de asientos que pueden ocupar
 * y el número del último ticket generado
 * 
 * @param int $cantPasajeros
 * @param int $cantAsientos
 * @param int $ultimoTicket
 * 
 * @return array $colPasajeros
 */
function crearColeccionPasajerosAutomatica($cantPasajeros, $cantAsientos, $ultimoTicket){
    // array $colPasajeros, $colAsientos
    // string $nombre, $apellido, $numeroAsiento, $tipoPasajero, $telefono
    // int $documento, $reqSila, $reqAsistencia, $reqComida, $nroViajeroFrecuente
    // boolean $reqSilla, $reqAsistencia, $reqComida

    $colPasajeros = [];
    $colAsientos = [];

    for ($j=0; $j < $cantAsientos; $j++){
        $colAsientos[$j] = $j+1;
    }

    for ($i = 0; $i < $cantPasajeros; $i++){

        if(random_int(1,2) == 1){
            $nombre = generaNombreVaron(random_int(1,20));
        } else {
            $nombre = generaNombreMujer(random_int(1,20));
        }
        $apellido = generaApellido(random_int(1,20));
        
        $documento = 1000 + $i+1;
        
        $telefono = random_int(100, 799)." ". random_int(500, 599) ." ". 1000+$i;

        $asientoAleatorio = random_int(0, count($colAsientos)-1);
        $numeroAsiento = $colAsientos[$asientoAleatorio];
        unset($colAsientos[$asientoAleatorio]);
        $colAsientos = array_values($colAsientos);

        $ultimoTicket ++;

        $tipoPasajero = random_int(1, 10);

        if($tipoPasajero == 1){
            $nroViajeroFrecuente = random_int(1000, 9999);
            $cantMillas = random_int(10, 1000);
            $colPasajeros[$i] = new PasajeroVIP($nombre, $apellido, $documento,
            $telefono, $numeroAsiento, $ultimoTicket, $nroViajeroFrecuente, $cantMillas);
        }else if($tipoPasajero == 2 || $tipoPasajero == 3){
            if(random_int(1, 3) == 1){
                $reqSilla = true;
            }else{
                $reqSilla = false;
            }
            if(random_int(1, 3) == 1){
                $reqAsistencia = true;
            }else{
                $reqAsistencia = false;
            }
            if(random_int(1, 3) == 1){
                $reqComida = true;
            }else{
                $reqComida = false;
            }
            if(!$reqSilla && !$reqAsistencia && !$reqComida){
                $reqComida = true;
            }
            $colPasajeros[$i] = new PasajeroEspecial($nombre, $apellido, $documento,
            $telefono, $numeroAsiento, $ultimoTicket, $reqSilla, $reqAsistencia, $reqComida);
        }else{
            $colPasajeros[$i] = new Pasajero($nombre, $apellido, $documento,
            $telefono, $numeroAsiento, $ultimoTicket);
        }
    }

    return $colPasajeros;
}

/*/=======================================================================================\*\
||                                    PROGRAMA PRINCIPAL                                   ||
\*\=======================================================================================/*/

/**
 * Viaje $viaje
 * ResponsableV $responsable
 * Pasajero $pasajero
 * int $codigo, $cantMaxPasajeros, $cantPasajeros, $documento, $opcionMenuPrincipal, $opcionMenuOperaciones
 * $ultimoTicket, $cantMillas, $numeroEmpleado
 * float $costo
 * string $destino, $nombre, $apellido, $numeroTelefono, $nroViajeroFrecuente, $numeroLicencia
 * array $colPasajeros
 * boolean $esPosible, $permitido, $servicioSilla, $servicioAsistencia, $servicioComida
 */

$numeroEmpleado = 997;
$responsable = new ResponsableV($numeroEmpleado, 31721, "Nicolás", "Borghese");

$cantPasajeros = 10;
$cantMaxPasajeros = 20;
$ultimoTicket = 19000;
$colPasajeros = crearColeccionPasajerosAutomatica($cantPasajeros, $cantMaxPasajeros, $ultimoTicket);
$ultimoTicket += $cantPasajeros;

$viaje = new Viaje(1001, "Plottier", $cantMaxPasajeros, $colPasajeros, $responsable, 100);

echo "\n";
echo "=====================================================================================\n";
echo "|| El programa cuenta con un primer viaje precargado                               ||\n";
echo "=====================================================================================\n";
echo "\n";

do {

    $opcionMenuPrincipal = menuPrincipal();

    switch ($opcionMenuPrincipal){
        // [[1]] MENÚ PARA CREAR/MODIFICAR VIAJE
        case 1:
            $opcionMenuOperaciones = menuModificarViaje();
            switch($opcionMenuOperaciones){
                // 1 [1] Crear un viaje nuevo
                case 1:
                    echo "Ingrese el código correspondiente al nuevo viaje: ";
                    $codigo = trim(fgets(STDIN));
                    echo "Ingrese el destino del nuevo viaje: ";
                    $destino = trim(fgets(STDIN));

                    do{
                        $permitido = true;
                        echo "Ingrese la capacidad máxima de pasajeros para el nuevo viaje: ";
                        $cantMaxPasajeros = trim(fgets(STDIN));
                        if(!ctype_digit($cantMaxPasajeros) || $cantMaxPasajeros < 0){
                            $permitido = false;
                            echo "ERROR: valor ingresado para capacidad máxima inválido\n";
                        }
                    }while(!$permitido);
                    
                    $cantMaxPasajeros = (int)$cantMaxPasajeros;
                    $numeroEmpleado++;
                    $responsable = crearResponsable($numeroEmpleado);

                    do{
                        $permitido = true;
                        echo "Ingrese el costo de pasaje para el viaje: $";
                        $costo = trim(fgets(STDIN));
                        if(!is_numeric($costo) || $costo < 0){
                            $permitido = false;
                            echo "ERROR: valor ingresado para costo de pasaje inválido\n";
                        }
                    }while(!$permitido);

                    $costo = (float)$costo;
                    $viaje = new Viaje($codigo, $destino, $cantMaxPasajeros, [], $responsable, $costo);
                    echo "\n";
                    echo "¡Viaje creado con éxito!\n";
                    detenerEjecucion();
                    break;
                // 1 [2] Vender un pasaje del viaje a un pasajero
                case 2:
                    $pasajero = crearPasajero($ultimoTicket);
                    $costo = $viaje->venderPasaje($pasajero);
                    echo "\n";
                    if($costo != -1){
                        $ultimoTicket ++;
                        echo "¡Pasaje vendido con éxito!\n";
                        echo "Deberá abonar: $".$costo."\n";
                    } else {
                        if($viaje->existePasajero($pasajero->getDocumento())){
                            echo "ERROR: ya existe este número de documento dentro del viaje\n";
                        }
                        if($viaje->esAsientoOcupado($pasajero->getNumeroAsiento())){
                            echo "ERROR: el asiento elegido ya se encuentra ocupado\n";
                        }
                        if($pasajero->getNumeroAsiento() > $viaje->getCantMaxPasajeros()){
                            echo "ERROR: el asiento elegido no existe dentro del viaje\n";
                        }
                        if (!$viaje->hayPasajesDisponible()){
                            echo "ERROR: el viaje tiene todos sus pasajes vendidos\n"; 
                        }
                    }
                    detenerEjecucion();
                    break;
                // 1 [3] Asignar una nueva colección de pasajeros al viaje (reemplaza la actual)
                case 3:
                    echo "Ingrese la cantidad de pasajeros aleatorios que desea crear: ";
                    $cantPasajeros = (trim(fgets(STDIN)));
                    echo "\n";
                    if (!ctype_digit($cantPasajeros) || $cantPasajeros < 0 ){
                        echo "ERROR: valor no válido para cantidad de pasajeros\n";
                    } else if($cantPasajeros > $viaje->getCantMaxPasajeros()){
                        echo "ERROR: la cantidad de pasajeros ingresada excede la capacidad máxima del viaje\n";
                    } else {
                            $colPasajeros = crearColeccionPasajerosAutomatica(
                                $cantPasajeros, $viaje->getCantMaxPasajeros(), $ultimoTicket);

                            $ultimoTicket += $cantPasajeros;
                            $viaje->renovarPasajeros($colPasajeros);
                            echo "¡Carga automática de pasajeros realizada con éxito!\n";
                    }
                    detenerEjecucion();
                    break;
                // 1 [4] Asignar un nuevo responsable de viaje
                case 4:
                    $numeroEmpleado++;
                    $responsable = crearResponsable($numeroEmpleado);
                    $viaje->setResponsable($responsable);
                    echo "\n";
                    echo "¡Nuevo responsable cargado con éxito!\n";
                    detenerEjecucion();
                    break;
                // 1 [5] modificar responsable de viaje actual
                case 5:
                    echo "Estado del responsable:\n";
                    echo $responsable."\n\n"; 

                    echo "Ingrese los nuevos valores para cada campo que desee actualizar del responsable\n";
                    echo "(ignore los campos que no desee modificar)\n\n";
                    echo "Ingrese un nuevo nombre: ";
                    $nombre = trim(fgets(STDIN));
                    echo "Ingrese un nuevo apellido: ";
                    $apellido = trim(fgets(STDIN));
                    echo "Ingrese un nuevo número de licencia: ";
                    $numeroLicencia = trim(fgets(STDIN));
                    
                    $viaje->modificarResponsable($nombre, $apellido, $numeroLicencia);

                    echo "\n";
                    echo "Responsable actualizado:\n";
                    echo $responsable."\n"; 
                    detenerEjecucion();
                    break;
                // 1 [6] Modificar el destino del viaje
                case 6:
                    echo "Destino actual del viaje: ".$viaje->getDestino()."\n";
                    echo "Ingrese el nuevo destino del viaje: ";
                    $destino = trim(fgets(STDIN));
                    $viaje->setDestino($destino);
                    echo "\n";
                    echo "¡Destino modificado con éxito!\n";
                    detenerEjecucion();
                    break;
                // 1 [7] Modificar la cantidad máxima permitida de pasajeros para el viaje
                case 7:
                    echo "Cantidad máxima de pasajeros permitida actual: ".$viaje->getCantMaxPasajeros()."\n";
                    echo "Ingrese la nueva cantidad máxima permitida de pasajeros para este viaje: ";
                    $cantMaxPasajeros = trim(fgets(STDIN));
                    if (!ctype_digit($cantMaxPasajeros) || $cantMaxPasajeros < 0){      
                        echo "ERROR: valor ingresado para cantidad máxima de pasajeros inválido\n";
                    } else if ($cantMaxPasajeros < $viaje->mayorAsientoOcupado()){
                        echo "ERROR: cantidad máxima ingresada no compatible\n";
                        echo "con los asientos ocupados actualmente\n";
                    }else{
                        $cantMaxPasajeros = (int)$cantMaxPasajeros;
                        $viaje->setCantMaxPasajeros($cantMaxPasajeros);
                        echo "\n";
                        echo "¡Cantidad máxima de pasajeros modificada con éxito!\n";
                    }
                    detenerEjecucion();
                    break;
                // 1 [8] Modificar el costo de pasaje para el viaje
                case 8:
                    echo "Costo de pasaje actual para el viaje: $".$viaje->getCostoPasaje()."\n";
                    do{
                        $permitido = true;
                        echo "Ingrese el nuevo costo de pasaje para el viaje: $";
                        $costo = trim(fgets(STDIN));
                        if(!is_numeric($costo) || $costo < 0){
                            $permitido = false;
                            echo "ERROR: valor ingresado para costo de pasaje inválido\n";
                        }
                    }while(!$permitido);
                    $costo = (float)$costo;
                    $viaje->setCostoPasaje($costo);
                    $viaje->actualizarRecaudacionTotal();
                    echo "¡Nuevo costo de pasaje para el viaje modificado con éxito!\n";
                    detenerEjecucion();
                    break;
                // 1 [0] Vuelve al menú principal
                case 0:    
                    break;
                // 1 En caso de error accederá a esta opción y volverá al menú principal
                default:
                    break;
            }
            break;
        // [[2]] MENÚ PARA OBSERVAR DATOS DEL VIAJE
        case 2:
            $opcionMenuOperaciones = menuObservarViaje();
            switch($opcionMenuOperaciones){
                // 2 [1] Visualizar la información completa del viaje
                case 1:
                    echo $viaje;
                    detenerEjecucion();
                    break;
                // 2 [2] Visualizar la colección del pasajeros
                case 2:
                    echo "Colección de pasajeros del viaje actual:\n";
                    echo "\n";
                    echo $viaje->mostrarColPasajeros();
                    detenerEjecucion();
                    break;
                // 2 [3] Visualizar el código del viaje
                case 3:
                    echo "El código del viaje es: ".$viaje->getCodigo()."\n";
                    detenerEjecucion();
                    break;
                // 2 [4] Visualizar el destino del viaje
                case 4:
                    echo "El destino del viaje actual es: ".$viaje->getDestino()."\n";
                    detenerEjecucion();
                    break;
                // 2 [5] Visualizar la cantidad máxima de pasajeros permitida
                case 5:
                    echo "La cantidad máxima de pasajeros permitida para el viaje es: ".$viaje->getCantMaxPasajeros()."\n";
                    detenerEjecucion();
                    break;
                // 2 [6] Visualizar al responsable del viaje
                case 6:
                    echo "El responsable del viaje es:\n";
                    echo $viaje->getResponsable();
                    echo "\n";
                    detenerEjecucion();
                    break;
                // 2 [7] Visualizar el costo por pasaje del viaje
                case 7:
                    echo "El costo por pasaje del viaje es: $".$viaje->getCostoPasaje()."\n";
                    detenerEjecucion();
                    break;
                // 2 [8] Visualizar la recaudación total actual del viaje
                case 8:
                    echo "La recaudación total actual del viaje es: $".$viaje->getRecaudacionTotal()."\n";
                    detenerEjecucion();
                    break;
                // 2 [9] Visualizar los asientos libres
                case 9:
                    echo $viaje->mostrarAsientosLibres()."\n";
                    detenerEjecucion();
                    break;
                // 2 [10] Visualizar la cantidad de asientos disponibles
                case 10:
                    echo "La cantidad de asientos disponibles es: ".$viaje->cantidadAsientosDisponibles()."\n";
                    detenerEjecucion();
                    break;
                // 2 [0] Vuelve al menú principal
                case 0:
                    break;
                // 2 En caso de error accederá a esta opción y volverá al menú principal
                default:
                    break;
            }
            break;
        // [[3]] MENÚ PARA QUITAR/MODIFICAR PASAJEROS DEL VIAJE
        case 3:
            $opcionMenuOperaciones = menuModificarPasajero();
            switch($opcionMenuOperaciones){
                // 3 [1] Quitar un pasajero del viaje
                case 1:
                    echo "Ingrese el número de documento del pasajero que desea quitar del viaje: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    $esPosible = $viaje->quitarPasajero($documento);
                    echo "\n";

                    if($esPosible){
                        echo "¡Pasajero quitado del viaje con éxito!\n";
                        echo $pasajero."\n\n";
                    } else {
                        echo "ERROR: no se pudo quitar al pasajero del viaje\n";
                        echo "(no se encontro el documento ingresado en el viaje actual)\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [2] Quitar todos los pasajeros del viaje
                case 2:
                    $viaje->vaciarViaje();
                    echo "¡Todos los pasajeros han sido quitados del viaje con éxito!\n";
                    detenerEjecucion();
                    break;
                // 3 [3] Modificar el nombre de un pasajero
                case 3:
                    echo "Ingrese el número de documento del pasajero al que desea cambiar su nombre: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero != null){
                        echo "Estado del pasajero:\n";
                        echo $pasajero."\n\n";

                        echo "Ingrese el nuevo nombre que desea asignar al pasajero: ";
                        $nombre = trim(fgets(STDIN));
                        $viaje->modificarNombrePasajero($documento, $nombre);
                        echo "\n";
                        echo "¡Se modificó el nombre del pasajero con éxito!\n";
                        echo $pasajero."\n";
                    } else {
                        echo "ERROR: no se pudo modificar el nombre del pasajero\n";
                        echo "(no se encontro el documento ingresado en el viaje actual)\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [4] Modificar el apellido de un pasajero
                case 4:
                    echo "Ingrese el número de documento del pasajero al que desea cambiar su apellido: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero != null){
                        echo "Estado del pasajero:\n";
                        echo $pasajero."\n\n";

                        echo "Ingrese el nuevo apellido que desea asignar al pasajero: ";
                        $apellido = trim(fgets(STDIN));
                        $viaje->modificarApellidoPasajero($documento, $apellido);
                        echo "\n";
                        echo "¡Se modificó el apellido del pasajero con éxito!\n";
                        echo $pasajero."\n";
                    } else {
                        echo "ERROR: no se pudo modificar el apellido del pasajero\n";
                        echo "(no se encontro el documento ingresado en el viaje actual)\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [5] Modificar el número de teléfono de un pasajero
                case 5:
                    echo "Ingrese el número de documento del pasajero al que desea cambiar su número de teléfono: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero != null){
                        echo "Estado del pasajero:\n";
                        echo $pasajero."\n\n";

                        echo "Ingrese el nuevo número de teléfono que desea asignar al pasajero: ";
                        $numeroTelefono = trim(fgets(STDIN));
                        $viaje->modificarTelefonoPasajero($documento, $numeroTelefono);
                        echo "\n";
                        echo "¡Se modificó el número de teléfono del pasajero con éxito!\n";
                        echo $pasajero."\n";
                    } else {
                        echo "ERROR: no se pudo modificar el número de teléfono del pasajero\n";
                        echo "(no se encontro el documento ingresado en el viaje actual)\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [6] Modificar el número de asiento del pasajero
                case 6:
                    if($viaje->hayPasajesDisponible()){
                        echo "Ingrese el número de documento del pasajero al que desea cambiar su número de asiento: ";
                        $documento = trim(fgets(STDIN));
                        $pasajero = $viaje->mostrarPasajero($documento);
                        echo "\n";
                        if($pasajero != null){    
                                echo $viaje->mostrarAsientosLibres()."\n";
                                echo "Estado del pasajero:\n";
                                echo $pasajero."\n\n";
                                echo "Ingrese el nuevo número de asiento que desea asignar al pasajero: ";
                                $numeroAsiento = trim(fgets(STDIN));
                                $esPosible = $viaje->modificarAsientoPasajero($documento, $numeroAsiento);
                                echo "\n";
                                if($esPosible){
                                    echo $viaje->mostrarAsientosLibres()."\n";
                                    echo "¡Se modificó el número asiento del pasajero con éxito!\n";
                                    echo $pasajero."\n";
                                } else {
                                    echo "ERROR: no se pudo modificar el número de asiento del pasajero\n";
                                    if($numeroAsiento <= $viaje->getCantMaxPasajeros() && $numeroAsiento >= 1){
                                        echo "(el número de asiento elegido ya se encuentra ocupado)\n";
                                    }else{
                                        echo "(no existe en el viaje el número de asiento elegido)\n";
                                    }
                                }
                        } else {
                            echo "ERROR: no se pudo modificar el número de asiento del pasajero\n";
                            echo "(no se encontro el documento ingresado en el viaje actual)\n";
                        }
                    } else {
                        echo "ERROR: no hay asientos disponibles para elegir en este viaje\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [7] Modificar campos de un pasajero especial
                case 7:
                    echo "Ingrese el número de documento del pasajero especial al cual desea modificar sus datos: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero != null){
                        if($pasajero instanceof PasajeroEspecial){
                            echo "Estado del pasajero:\n";
                            echo $pasajero."\n\n";

                            echo "Ingrese Si/No para cada servicio que desee actualizar\n";
                            echo "(ignore los servicios que no desee modificar)\n\n";
                            echo "Servicio de silla de ruedas: ";
                            $servicioSilla = trim(fgets(STDIN));
                            echo "Servicio de asistencia para embarque/desembarque: ";
                            $servicioAsistencia = trim(fgets(STDIN));
                            echo "Servicio de comida especial: ";
                            $servicioComida = trim(fgets(STDIN));

                            $viaje->modificarServiciosEspecialesPasajero(
                                $documento, $servicioSilla, $servicioAsistencia, $servicioComida);
                            echo "\n";
                            echo "Pasajero actualizado:\n";
                            echo $pasajero."\n";

                        } else {
                            echo "ERROR: el número de documento ingresado no corresponde a un pasajero de tipo especial\n";
                        }
                    } else {
                        echo "ERROR: el número de documento ingresado no existe en el viaje actual\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [8] Modificar campos de un pasajero VIP
                case 8:
                    echo "Ingrese el número de documento del pasajero VIP al cual desea modificar sus datos: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero != null){
                        if($pasajero instanceof PasajeroVIP){
                            echo "Estado del pasajero:\n";
                            echo $pasajero."\n\n"; 

                            echo "Ingrese los nuevos valores para cada campo que desee actualizar\n";
                            echo "(ignore los campos que no desee modificar)\n\n";
                            echo "Ingrese un número de viajero frecuente: ";
                            $nroViajeroFrecuente = trim(fgets(STDIN));
                            do{
                                $permitido = true;
                                echo "Ingrese la nueva cantidad de millas (campo con validación): ";
                                $cantMillas = trim(fgets(STDIN));
                                if(!$cantMillas == ""){
                                    if(!ctype_digit($cantMillas) || $cantMillas < 0){
                                        $permitido = false;
                                        echo "ERROR: valor ingresado para cantidad de millas inválido\n";
                                    }
                                }
                            } while (!$permitido);

                            $viaje->modificarCamposVIPPasajero($documento, $nroViajeroFrecuente, $cantMillas);
                            echo "\n";
                            echo "Pasajero actualizado:\n";
                            echo $pasajero."\n";

                        } else {
                            echo "ERROR: el número de documento ingresado no corresponde a un pasajero de tipo VIP\n";
                        }
                    } else {
                        echo "ERROR: el número de documento ingresado no existe en el viaje actual\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [9] Visualizar pasajero por número de documento
                case 9:
                    echo "Ingrese el número de documento del pasajero que desea visualizar sus datos: ";
                    $documento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajero($documento);
                    echo "\n";

                    if($pasajero == null){
                        echo "ERROR: el documento ingresado no corresponde a ningún pasajero en el viaje\n";
                    } else {
                        echo "Pasajero encontrado:\n";
                        echo $pasajero;
                        echo "\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [10] Visualizar pasajero por número de asiento
                case 10:
                    echo "Ingrese el número de asiento del pasajero que desea visualizar sus datos: ";
                    $numeroAsiento = trim(fgets(STDIN));
                    $pasajero = $viaje->mostrarPasajeroPorNroAsiento($numeroAsiento);
                    echo "\n";

                    if($pasajero == null){
                        echo "ERROR: el número de asiento ingresado no corresponde a ningún pasajero en el viaje\n";
                    } else {
                        echo "Pasajero encontrado:\n";
                        echo $pasajero;
                        echo "\n";
                    }
                    detenerEjecucion();
                    break;
                // 3 [0] Vuelve al menú principal
                case 0:
                    break;
                // 3 En caso de error accederá a esta opción y volverá al menú principal
                default:
                    break;
            }
            break;
        // [[0]] Finaliza el programa
        case 0:
            echo "¡PROGRAMA FINALIZADO!\n";
            echo "\n";
            break;
        // En caso de error accederá a esta opción y se finalizará el programa
        default:
            break;
    }

} while ($opcionMenuPrincipal != 0);

/*
OBSERVACIONES:
1. No se permite modificar el código de viaje por considerarse una identificación unívoca.
Aunque en este caso no se manipule una colección de viajes, en caso de que se desee cambiar el código
de viaje debe crearse uno nuevo.

2. No se permite modificar el documento de los pasajeros por considerarse una identificación unívoca.
En caso de ser necesario se borra y se crea un nuevo pasajero.

3. No se permite cambiar el número de ticket de un pasajero, estos se generan automáticamente a medida
que se venden los pasajes y cada uno corresponde a un pasaje vendido.

4. No se permite cambiar el número de empleado de un responsable, estos se generan automáticamente a medida
que se crean los responsables.
*/

?>