<?php

class RegistroControlador
{
    public function ctrRegistroAlumno()
    {
        if (isset($_POST['btnRegistro'])) {
            $api_ultimo_alumno = file_get_contents(HTTP_HOST . "api/api.php/ultimoUsuario", true);
            $usr_id = json_decode($api_ultimo_alumno, true);
            $usr_id['usr_id'] = $usr_id['usr_id'] + 1;
            $usr_id['usr_id'] =  strlen($usr_id['usr_id']) == 0 ? "0001"  : $usr_id['usr_id'];
            $usr_id['usr_id'] =  strlen($usr_id['usr_id']) == 1 ? "000" . $usr_id['usr_id'] : $usr_id['usr_id'];
            $usr_id['usr_id'] =  strlen($usr_id['usr_id']) == 2 ? "00" . $usr_id['usr_id'] : $usr_id['usr_id'];
            $usr_id['usr_id'] =  strlen($usr_id['usr_id']) == 3 ? "0" . $usr_id['usr_id'] : $usr_id['usr_id'];
            // CAMBIAR AQUI
            $_POST['usr_matricula'] = SUB_FIJO . $usr_id['usr_id'];

            $_POST['usr_modalidad'] = 'ONLINE';
            $_POST['usr_clave'] = password_hash($_POST['usr_clave'], PASSWORD_DEFAULT);
            $_POST['usr_rol'] = 'Alumno';
            $_POST['usr_usuario_registro'] = 'REGISTRO ONLINE';

            $_POST['usr_fecha_registro'] = FECHA;

            // CAMBIAR AQUI
            $_POST['usr_id_sucursal'] = SUCURSAL_ID;



            //Lo primerito, creamos una variable iniciando curl, pasándole la url
            $ch = curl_init(HTTP_HOST . 'api/api.php/create/prospecto');

            //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
            curl_setopt($ch, CURLOPT_POST, 1);

            //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
            curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);

            //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            //recogemos la respuesta
            $respuesta = curl_exec($ch);

            $respuesta = json_decode($respuesta, true);
            if ($respuesta['status']) {

                echo
                '
            <script> 
                swal({
                    title: "¡Muy bien!",
                    text: "Registro exitoso, a continuación inicia sesión para completar tu inscripción.",
                    icon: "success",
                    buttons: [false,"Continuar"],
                    dangerMode: true,
                    closeOnClickOutside: false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        location.href = "' . HTTP_HOST_APP . '"
                    } else {
                        location.href = "' . HTTP_HOST_APP . '"
                    }
                });
            </script> 
        ';
            }

            //o el error, por si falla
            $error = curl_error($ch);

            //y finalmente cerramos curl
            curl_close($ch);
        }
    }
}
