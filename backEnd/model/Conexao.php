<?php

define('DB_NAME','fermatil_BancoCaio'); // COLOCAR O NOME DA BASE DE DADOS
define('DB_HOST', 'fermatil.com.br'); // COLOCAR O HOST DA BASE DE DADOS
define('DB_USER','fermatil_caio'); // COLOCAR O USUÁRIO DA BASE DE DADOS
define('DB_PASS','caio123!@#'); // COLOCAR A SENHA DO BANCO DE DADOS AQUI
class Conexao {
    private static $instance;
    public static function getInstance(){
        if(!isset(self::$instance)){
            try {
                self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset=utf8', DB_USER, DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }
        return self::$instance;
    }

    public static function prepare($sql){
        return self::getInstance()->prepare($sql);
        echo "Conectado com sucesso";
    }

}?>