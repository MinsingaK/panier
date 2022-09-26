<?php
    class DB{

        private $host = 'localhost';
        private $nomuser = 'root';
        private $password = '';
        private $database = 'panier';
        private $db;

        public function __construct($host = null, $nomuser = null, $password = null, $database = null)
        {
            if($host != null){
                $this->host = $host;
                $this->nomuser = $nomuser;
                $this->password = $password;
                $this->database = $database;
            }
            try{
                $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->nomuser, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            }catch(PDOException $e){
                die('<h1>Erreur de connexion a la base de donnees</h1>');
            }
        }

        public function query($sql){
            $req = $this->db->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
    }
        
?>