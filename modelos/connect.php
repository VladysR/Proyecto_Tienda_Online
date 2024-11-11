
<?php 

class Connect{

    private static $name_database = "mi_tienda";
    private static $host = "localhost:3306";
    private static $user = "root";
    private static $pwd = "";
    private static $conexion = null;

    public static function getConnection(){

        if(self::$conexion === null){

            try {
                self::$conexion = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$name_database, self::$user, self::$pwd);    

                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                
                echo "Error de conexión: " . $e->getMessage();
            }
        } 
        return self::$conexion;
    }

}