<?php

/**
 * Project:     Framework G - G Light
 * File:        db.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2013-02-07
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */
class db {

    var $server = C_DB_SERVER; //DB server
    var $user = C_DB_USER; //DB user
    var $pass = C_DB_PASS; //DB password
    var $db = dbdcpstodas; //DB database name
    var $limit = C_DB_LIMIT; //DB limit of elements by page
    var $cn;
    var $numpages;

    public function db() {
        
    }

    //connect to database
    public function connect() {
        $this->cn = mysqli_connect($this->server, $this->user, $this->pass);
        if (!$this->cn) {
            die("Failed connection to the database: " . mysqli_error($this->cn));
        }
        if (!mysqli_select_db($this->cn, $this->db)) {
            die("Unable to communicate with the database $db: " . mysqli_error($this->cn));
        }
        mysqli_query($this->cn, "SET NAMES utf8");
    }

    //function for doing multiple queries
    public function do_operation($operation, $class = NULL) {
        $result = mysqli_query($this->cn, $operation);
        if (!$result) {
            $this->throw_sql_exception($class);
        }
    }

    //function for obtain data from db in object form
    private function get_data($operation) {
        $data = array();
        $result = mysqli_query($this->cn, $operation) or die(mysqli_error($this->cn));
        while ($row = mysqli_fetch_object($result)) {
            array_push($data, $row);
        }
        return $data;
    }

    //throw exception to web document
    private function throw_sql_exception($class) {
        $errno = mysqli_errno($this->cn);
        $error = mysqli_error($this->cn);
        $msg = $error . "<br /><br /><b>Error number:</b> " . $errno;
        throw new Exception($msg);
    }

    //for avoid sql injections, this functions cleans the variables
    private function escape_string(&$data) {
        if (is_object($data)) {
            foreach ($data->metadata() as $key => $attribute) {
                if (!is_empty($data->get($key))) {
                    $data->set($key, mysqli_real_escape_string($this->cn, $data->get($key)));
                }
            }
        } else if (is_array($data)) {
            foreach ($data as $key => $value) {
                if (!is_array($value)) {
                    $data[$key] = mysqli_real_escape_string($this->cn, $value);
                }
            }
        }
    }

    //function for add data to db
    public function insert($options, $object) {
        switch ($options['lvl1']) {
            case "user":
                switch ($options['lvl2']) {
                    case "normal":
                        //
                        break;
                }
                break;
            
            
              case "dispositivo":
                switch($options['lvl2'])
                {
                    case "normal":
                        $codigo=mysqli_real_escape_string($this->cn,$object->get('codigo'));
                        $costo=mysqli_real_escape_string($this->cn,$object->get('costo'));
                        $funcion=mysqli_real_escape_string($this->cn, ($object->get('funcion')));
                        $this->do_operation("INSERT INTO dispositivo (codigo, costo, funcion) VALUES ('$codigo', '$costo', '$funcion');");
                        break;

                }
                break;

                case "diseno":
                switch($options['lvl2'])
                {
                    case "normal":
                        $codigo=mysqli_real_escape_string($this->cn,$object->get('codigo'));
                        $imagen=mysqli_real_escape_string($this->cn,$object->get('imagen'));
                        $dispositivo=mysqli_real_escape_string($this->cn, ($object->get('dispositivo')));
                        $this->do_operation("INSERT INTO diseno (codigo, imagen, dispositivo) VALUES ('$codigo', '$imagen', '$dispositivo');");
                        break;
                }
                break;


            case "prediseno":
                switch ($options['lvl2']) {
                    case "insert":
                        $code = mysqli_real_escape_string($this->cn, $object->get('codigo'));
                        $this->do_operation("INSERT INTO `dbdcpstodas`.`prediseno`(`Codigo`) VALUES ($code);");
                        break;
                }
                break;


            case "idea":
                switch ($options['lvl2']) {
                    case "normal":
                        $nombre = mysqli_real_escape_string($this->cn, $object->get('nombre'));
                        $descripcion = mysqli_real_escape_string($this->cn, $object->get('descripcion'));
                        $etapa = "Propuesta";
                        $necesidad = mysqli_real_escape_string($this->cn, $object->get('necesidad'));
                        $this->do_operation("INSERT INTO idea (nombre, descripcion, etapa, necesidad) VALUES ('$nombre', '$descripcion', '1', '$necesidad');");
                        break;
                }
                break;


            case "reunion":
                switch ($options['lvl2']) {
                    case "insert_reunion":
                        $fecha = mysqli_real_escape_string($this->cn, $object->get('fecha'));
                        $idea = $_SESSION["ididea"];
                        //echo $fecha;
                        //echo 'Esto es idea  ';
                        //echo $idea;

                        $this->do_operation("INSERT INTO `dbdcpstodas`.`reunion`(`fecha`,`idea`)VALUES('$fecha','$idea');");
                        break;
                }
                break;


            default: break;
        }
    }

    //function for edit data from db
    public function update($options, $object) {
        switch ($options['lvl1']) {
            case "user":
                switch ($options['lvl2']) {
                    case "normal":
                        //
                        break;
                }
                break;
            case "idea":
                switch ($options['lvl2']) {
                    case "normal":

                        $descripcion = mysqli_real_escape_string($this->cn, $object->get('descripcion'));
                        $nombre = $_SESSION['nombre'];
                        $this->do_operation("UPDATE `dbdcpstodas`.`idea` SET `descripcion` = '$descripcion', `etapa` =2 WHERE `nombre` = '$nombre';");
                        break;
                }
                break;

            default: break;
        }
    }

    //function for delete data from db
    public function delete($options, $object) {
        switch ($options['lvl1']) {
            case "user":
                switch ($options['lvl2']) {
                    case "normal":
                        //
                        break;
                }
                break;

            default: break;
        }
    }

    //function that returns an array with data from a operation
    public function select($option, $data) {
        $info = array();
        switch ($option['lvl1']) {
            case "user":
                switch ($option['lvl2']) {
                    case "all":
                        //
                        break;
                }
                break;
            case "necesidad":
                switch ($option['lvl2']) {
                    case "all" :
                        $info = $this->get_data("SELECT * FROM necesidad;");
                        break;
                }
                break;


            case "reunion":
                switch ($option['lvl2']) {
                    case "all":
                        $info = $this->get_data("SELECT r.*, r.id as 'id de la reunion', i.nombre as 'Nombre_de_la_idea' ,r.fecha as Fecha,  i.nombre As 
'Nombre_de_la_idea' FROM idea i, reunion r WHERE i.nombre=r.idea;");
                        break;
                    case "alll":
                        $info = $this->get_data("select * from reunion;");
                        break;
                }
                break;

            case "idea":
                switch ($option['lvl2']) {
                    case "all":
                        $info = $this->get_data("select * from idea;");
                        break;
                }
                break;
            case "prediseno":
                switch ($option['lvl2']) {
                    case "all":
                        $code = mysqli_real_escape_string($this->cn, $data['Codigo']);
                        $info = $this->get_data("SELECT * FROM `prediseno` where `Codigo`='$code';");
                        break;
                }
                break;

            case "empleado":
                switch ($option['lvl2']) {
                    case "all":
                        $info = $this->get_data("select * from login;");
                        break;
                    case "uno":
                        $i = mysqli_real_escape_string($this->cn, $data['cedula']);
                        $info = $this->get_data("select * from login where cedula='$i';");
                        break;
                    case "validar":
                        $ced = mysqli_real_escape_string($this->cn, $data['cedula']);
                        
                        $info = $this->get_data("select * from empleado where cedula='$ced';");
                        break;
                }
                break;

            case "cliente":
                switch ($option['lvl2']) {

                    case "validar":
                        $nom = mysqli_real_escape_string($this->cn, $data['nombre']);
                        $contra = mysqli_real_escape_string($this->cn, $data['identificacion']);
                        $info = $this->get_data("SELECT * FROM cliente where nombre ='$nom' and identificacion='$contra';");
                        break;
                }
                break;
            case "dispositivo":
                switch ($option['lvl2']) {
                    case "all" :
                        $info = $this->get_data("SELECT * FROM dispositivo;");
                        break;
                }
                break;


            default: break;
        }
        return $info;
    }

    //close the db connection
    public function close() {
        if ($this->cn) {
            mysqli_close($this->cn);
        }
    }

}

?>