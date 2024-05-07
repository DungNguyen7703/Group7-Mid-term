<?php

class Connection {
    private $server;
    private $user;
    private $pass;
    private $dbname;
    private $ocon;

    public function __construct($server, $user, $pass, $dbname) {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->ocon = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
        if ($this->ocon->connect_error) {
            die("Lỗi kết nối" . $this->ocon->connect_error);
        }
    }

    public function getConnection() {   
        return $this->ocon;
    }
}

$connection = new Connection("localhost", "root", "", "exam2");
$ocon = $connection->getConnection();

?>