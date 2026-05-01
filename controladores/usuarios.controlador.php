<?php

class ControladorUsuarios
{
    public function ctrIngresarUsuario()
    {

        if (isset($_POST["ingDocumento"])) {
            if (
                preg_match('/^[0-9]+$/', $_POST["ingDocumento"]) && //verifica el patron del documento define si es real
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])
            ) {
                $documento = $_POST["ingDocumento"];
                $respuesta = ModeloUsuarios::mdlIngresarUsuarios($documento);

                if (is_array($respuesta)) {
                    if ($respuesta["password"] == $_POST["ingPassword"] && $respuesta["documento_id"]
                        == $documento) {
                        $_SESSION["iniciarSesion"] = "ok";
                        echo "<script> window.location = 'inicio'; </script>";
                    } else {
                        echo '<br><div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
                        return;
                    }
                }

            }
        }
    } //fin metodo ingresar usuario

    public static function ctrListarUsuarios()
    {
        $respuesta = ModeloUsuarios::mdlListarUsuarios();
        return $respuesta;
    } //fin del metodo ctrListarUsuarios

    public function ctrAgregarUsuario()
    {

               
        if (isset($_POST["nuevoTipoDocumento"]) &&
            isset($_POST["nuevoDocumento"]) &&
            isset($_POST["nuevoNombres"]) &&
            isset($_POST["nuevoApellidos"]) &&
            isset($_POST["nuevoCorreo"]) &&
            isset($_POST["nuevaFechaNacimiento"]) &&
            isset($_POST["nuevoRol"])) {

                
            if (
                preg_match('/^[0-9]+$/', $_POST["nuevoDocumento"]) &&
                preg_match('/^[a-zA-ZáéíóúÑñ ]+$/', $_POST["nuevoNombres"]) &&
                preg_match('/^[a-zA-ZáéíóúÑñ ]+$/', $_POST["nuevoApellidos"])
            ) {
                $tabla = "usuarios";
                $datos = [
                    "tipoDocumento"   => $_POST["nuevoTipoDocumento"],
                    "documentoId"     => $_POST["nuevoDocumento"],
                    "nombres"         => $_POST["nuevoNombres"],
                    "apellidos"       => $_POST["nuevoApellidos"],
                    "correo"          => $_POST["nuevoCorreo"],
                    "fechaNacimiento" => $_POST["nuevaFechaNacimiento"],
                    "rol"             => $_POST["nuevoRol"],
                ];

                $respuesta = ModeloUsuarios::mdlAgregarUsuario($tabla, $datos);

                if ($respuesta == "ok") {
                    // echo "<br><div class='alert alert-success'>Usuario registrado correctamente</div>";
                    echo "<script>
                            Swal.fire({
                                icon: 'success',
                                title: '¡Usuario registrado correctamente!',
                                showConfirmButton: true,
                                confirmButtonText: 'Aceptar',
                                timer: 1500
                            }).then(() => {
                                window.location = 'usuarios';
                            });
                        </script>";
                } else {
                    echo "<br><div class='alert alert-danger'>Error al registrar el usuario</div>";
                }
            }
        }
    } //fin del metodo ctrAgregarUsuario
}
