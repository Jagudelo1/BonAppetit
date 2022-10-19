<?php 
    class Modelo_Grafico{
        private $conexion;
        function __construct()
        {
            require_once('conexion.php');
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function TraerDatosGraficoBar(){
            $sql = "SELECT `platillos`.`id_platillo`, `platillos`.`nombre_platillo`, `platillos`.`ventas`
            FROM `platillos` ORDER BY ventas DESC LIMIT 5";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    $arreglo[] = $consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

        function TraerDatosGraficoParametro($fechainicio,$fechafin){
            $sql = "SELECT `platillos`.`id_platillo`, `platillos`.`nombre_platillo`, `platillos`.`ventas`, `facturas`.`Documento`, `facturas`.`fecha_venta`
            FROM `platillos` 
                LEFT JOIN `facturas` ON `facturas`.`id_platillo` = `platillos`.`id_platillo`;('$fechainicio','$fechafin')";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    $arreglo[] = $consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

    }
?>