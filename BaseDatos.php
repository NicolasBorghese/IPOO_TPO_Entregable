<?php
/* Clase de conexión a base de datos PostgreSQL via PDO (PHP 7+) */

class BaseDatos {
    private $HOSTNAME;
    private $BASEDATOS;
    private $USUARIO;
    private $CLAVE;
    private $PUERTO;
    private $CONEXION;
    private $QUERY;
    private $RESULT;
    private $ERROR;

    /**
     * Constructor de la clase que inicia las variables de conexión al servidor de BD
     */
    public function __construct(){
        $this->HOSTNAME  = "127.0.0.1";
        $this->BASEDATOS = "bdviajefeliz";
        $this->USUARIO   = "postgres";
        $this->CLAVE     = "1234";
        $this->PUERTO    = "5432";
        $this->RESULT    = false;
        $this->QUERY     = "";
        $this->ERROR     = "";
    }

    /**
     * Retorna una cadena con la descripción del error si lo hubiera
     *
     * @return string
     */
    public function getError(){
        return "\n" . $this->ERROR;
    }

    /**
     * Inicia la conexión con el servidor PostgreSQL.
     * Retorna true si la conexión se pudo establecer, false en caso contrario.
     *
     * @return boolean
     */
    public function Iniciar(){
        $resp = false;
        try {
            $dsn = "pgsql:host={$this->HOSTNAME};port={$this->PUERTO};dbname={$this->BASEDATOS}";
            $this->CONEXION = new PDO($dsn, $this->USUARIO, $this->CLAVE, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            unset($this->QUERY);
            unset($this->ERROR);
            $resp = true;
        } catch (PDOException $e) {
            $this->ERROR = "ERROR: no se pudo realizar la conexión a la base de datos. " . $e->getMessage();
        }
        return $resp;
    }

    /**
     * Ejecuta una consulta en la Base de Datos.
     * Recibe la consulta en una cadena enviada por parámetro.
     *
     * @param string $consulta
     * @return boolean
     */
    public function Ejecutar($consulta){
        $resp = false;
        unset($this->ERROR);
        $this->QUERY = $consulta;
        try {
            $this->RESULT = $this->CONEXION->query($consulta);
            $resp = true;
        } catch (PDOException $e) {
            $this->ERROR = $e->getCode() . ": " . $e->getMessage();
        }
        return $resp;
    }

    /**
     * Devuelve un registro retornado por la ejecución de una consulta.
     * El puntero se desplaza al siguiente registro.
     *
     * @return array|null
     */
    public function Registro(){
        $resp = null;
        if ($this->RESULT){
            unset($this->ERROR);
            $temp = $this->RESULT->fetch(PDO::FETCH_ASSOC);
            if ($temp !== false){
                $resp = $temp;
            } else {
                $this->RESULT = false;
            }
        } else {
            $this->ERROR = "No hay resultado disponible para la consulta.";
        }
        return $resp;
    }

    /**
     * Ejecuta un INSERT y devuelve el id generado automáticamente por la secuencia.
     * Retorna el id numérico del registro insertado, null si falla.
     *
     * @param string $consulta
     * @return int|null
     */
    public function devuelveIDInsercion($consulta){
        $resp = null;
        unset($this->ERROR);
        $this->QUERY = $consulta;
        try {
            $this->CONEXION->exec($consulta);
            // lastval() devuelve el último valor generado por cualquier secuencia en la sesión actual
            $stmt = $this->CONEXION->query("SELECT lastval()");
            $row  = $stmt->fetch(PDO::FETCH_NUM);
            $resp = (int)$row[0];
        } catch (PDOException $e) {
            $this->ERROR = $e->getCode() . ": " . $e->getMessage();
        }
        return $resp;
    }
}
?>
