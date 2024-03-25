<?php 
class Conexao{

    public static function LigarConexao(){

        $connect = new PDO('mysql:dbname=u283879542_adegacleitinho;host=195.179.239.0', 'u283879542_adegacleitinho', 'SenacAdega01');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

}
?>
