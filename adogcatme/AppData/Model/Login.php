<?php namespace AppData\Model;
    class Login {
        private $nombre_p, $contraseña, $nickname, $ap_p, $am_p, $edad, $id_sexo;
    public function __construct() {
        $this->conexion= new conexion();
        }
        public function set($atributo,$valor) {
                $this->$atributo=$valor;
        }
        public function get($atributo) {
                return $this->$atributo;
        }
        public function verify() {
        $sql="SELECT usuarios.id_usuario, personas.nombre_p, personas.ap_p, personas.am_p FROM personas, usuarios, sexos where usuarios.nickname='{$this->usuario}' and usuarios.pass='{$this->contraseña}' and personas.id_usuario=usuarios.id_usuario and personas.id_sexo=sexos.id_sexo";
        echo $sql;
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;

    }
        public function registrar() {

        }
        public function guardar() {
            $sql="INSERT INTO usuarios (nickname, pass) VALUES ('{$this->nickname}','{$this->contraseña}')";
            $this->conexion->QuerySimple($sql);
            $sql="SELECT * FROM usuarios WHERE nickname='{$this->nickname}' AND pass='{$this->contraseña}'";
            $dato=$this->conexion->QueryResultado($sql);
            if (mysqli_num_rows($dato) > 0) {
                    $datos=mysqli_fetch_assoc($dato);
            }
            if(isset($datos['id_usuario'])) {
                $sql="INSERT INTO personas(nombre_p, ap_p, am_p, edad, id_sexo, id_usuario) VALUES ('{$this->nombre_p}','{$this->ap_p}','{$this->am_p}','{$this->edad}','{$this->id_sexo}','{$datos['id_usuario']}')";
                $this->conexion->QuerySimple($sql);
                $_SESSION['id_usuario']=$datos['id_usuario'];
            }
        }
        public function registro(){

        }
        public function insertaUsuario(){
            $sql="INSERT INTO personas(nombre_p, ap_p, am_p, edad, id_sexo, id_usuario) VALUES ('{$this->nombre_p}', '{$this->ap_p}', '{$this->am_p}', '{$this->edad}', '{$this->id_sexo}', '{$this->id_tipo_usuario}')";
            $this->conexion->QuerySimple($sql);
        }
        public function getSex(){
            $sql="SELECT * FROM sexos";
            $datos=$this->conexion->QueryResultado($sql);
            return $datos;
        }
        public function getOne(){
            $sql="SELECT * FROM usuarios WHERE nickname='{$this->nickname}' AND pass='{$this->contraseña}'";
            $dato=$this->conexion->QueryResultado($sql);
            return $dato;
        }
    }
?>
