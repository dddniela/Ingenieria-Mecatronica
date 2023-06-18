<?php

require_once "Conexion.php";

class Seccion
{
    private $especialidadId;
    private $carreraId;
    private $nombre;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function getObjetivo()
    {
        $cn = $this->connection;
        $sql = "SELECT * FROM tbl_seccion WHERE carreraId = " . $GLOBALS['carreraID'] . "
        AND moduloId = 2 AND titulo = 'Objetivo general' AND status = 1;";
        $objetivo = mysqli_query($this->connection, $sql);
        $objetivo = $objetivo->fetch_object();
        return $objetivo;
    }

}
