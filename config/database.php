<?php
class Database {
    private $host = "randion.es";
    private $port = "5432"; // El puerto predeterminado de PostgreSQL es 5432
    private $dbname = "fgonzalezviejo_php_login_system";
    private $user = "fgonzalezviejo";
    private $password = "Secretos.2023";
    private $db;

    public function getConnection() {
        try {
            $this->db = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->password");
            // Configura el manejo de excepciones de PDO
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión exitosa a PostgreSQL";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->db;
    }
}
?>