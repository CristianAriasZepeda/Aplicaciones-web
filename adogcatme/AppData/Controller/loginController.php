<?php namespace AppData\Controller;
    use AppData\Model\Login;
    class loginController{
        private $login;
        function __construct(){
                $this->login=new Login();
        }
        function index(){

        }

        public function verify() {
        if(isset($_POST)) {
            $this->login->set("usuario", $_POST["usuario"]);
            $this->login->set("contraseña", $_POST["contraseña"]);
            $datos = $this->login->verify();
            if (mysqli_num_rows($datos) > 0) {
                $datos=mysqli_fetch_assoc($datos);
                $_SESSION["nombre_p"]=$datos["nombre_p"] . " " . $datos["ap_p"] . " " . $datos["am_p"];
            } else {
                $_SESSION["error_login"] = "los datos no coinciden con nuestros registros";
            } ?>
                        <script type="text/javascript">
                            //window.location.href = "<?php echo URL?>";
                        </script>
                        <?php
        }
    }
        public function logout(){
            session_destroy();
        }
        public function registrar(){
            $datos[0]=$this->login->getSex();
            return $datos;
        }
        public function guardar(){
            if(isset($_POST)){
                $this->login->set("nombre_p",$_POST['nombre_p']);
                $this->login->set("ap_p",$_POST['ap_p']);
                $this->login->set("am_p",$_POST['am_p']);
                $this->login->set("edad",$_POST['edad']);
                $this->login->set("id_sexo",$_POST['id_sexo']);
                $this->login->set("nickname",$_POST['nickname']);
                $this->login->set("contraseña",$_POST['contraseña']);
                $this->login->guardar();
                $dato=$this->login->getOne();
                if (mysqli_num_rows($dato) > 0) { ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        swal({
                            title : " ",
                            text : "\nGuardado correctamente",
                            closeOnCancel :  false,
                            closeOnConfirm : false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer : 2000
                        });
                        setTimeout(function(){
                            window.location.href = "<?php echo URL?>login";
                        },2100)
                    })
                    </script>
                    <?php
                }
            }
        }
        public function registro(){

        }
        public function guarda(){
            if(isset($_POST)){
                $this->login->set("nombre_p",$_POST['nombre_p']);
                $this->login->set("ap_p",$_POST['ap_p']);
                $this->login->set("am_p",$_POST['am_p']);
                $this->login->set("edad",$_POST['edad']);
                $this->login->set("id_sexo",$_POST['id_sexo']);
                $this->login->insertaUsuario();
                ?>
                <script type="text/javascript">
                    window.location.href = "<?php echo URL?>login";
                </script>
                <?php
            }
        }
        function __destruct(){

        }
    }
?>
