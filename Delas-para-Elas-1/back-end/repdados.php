<?php

require_once 'usuario.php';
require_once 'conexao.php';


interface IRepositorioNome {
    public function Nome($nome_usuario,$senha_usuario);
   
}

class RepositorioNomeMySQL implements IRepositorioNome
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","delas_para_elas");
        if($this->conexao->conectar()==false){
            echo "Erro de conexao ".mysqli_connect_error();
        }
    }

    public function Nome($nome_usuario, $email_usuario){
        $sql = "SELECT * FROM tbl_usuario WHERE nome_usuario = '$nome_usuario' AND email_usuario ='$email_usuario'";
        $mostrar = $this->conexao->executarQuery($sql);
        return $mostrar;
    }

    }