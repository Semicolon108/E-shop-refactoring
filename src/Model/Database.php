<?php

    namespace App\Model;
    use PDO;
    use PDOException;
    use App\Model\Session;

    class Database
    {
        private $host = '127.0.0.1';
        private $user = 'root';
        private $pwd = "";
        private $db = 'E-shop';

        protected $DBHandler;

        public function __construct()
        {
            $this->DBHandler = null;
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
            try{
                $this->DBHandler = new PDO($dsn,$this->user,$this->pwd);
                $this->DBHandler->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                $this->DBHandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("Database connection failed : ".$e->getMessage());
            }
        }
    }
    Session::start();
?> 