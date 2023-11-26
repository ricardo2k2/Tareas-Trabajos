<?php
    class estudianteModel {
        private $PDO;

        public function __construct() {
           require_once ('../database.php'); //el ".." significa nivel anterior
           $data = new dataConex(); //el new significa nueva instancia, en este caso del dataconex
           $this->PDO = $data->conexion();
        }

        public function Insertar($nombre,$apellido,$codigocurso) {
            $sql = 'INSERT INTO estudiantes VALUE (0, :nombre, :apellido, :codigocurso)'; //cuando ponemos dos puntos le decimos al motor de la base de datos que prepare pero aun no inserte
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            $statement->bindParam(':codigocurso', $codigocurso);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function Actualizar($idEstudiante,$nombre,$apellido,$codigocurso) {
            $sql = 'UPDATE estudiantes SET nombre = :nombre, apellido = :apellido, codigocurso = :codigocurso WHERE idEstudiante = :idEstudiante '; //SET o SETEAR es asignacion, estamos asignando a los valores y todo lo que vamos a cambiar estan en el SET, idEstudiante no se cambia por eso solo esta en WHERE
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            $statement->bindParam(':codigocurso', $codigocurso);
            $statement->bindParam(':idEstudiante', $idEstudiante);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idEstudiante) {
            $sql = 'DELETE FROM estudiantes WHERE idEstudiante=:idEstudiante'; 
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiante', $idEstudiante);
            return ($statement->execute()) ? true : false;
        }
 
        public function listar() {
            $sql = 'SELECT idEstudiante,nombre,apellido,codigoCurso,
if(codigoCurso=1, "VUE", if(codigoCurso=2, "RUBY", "PHP")) as curso FROM estudiantes ORDER BY idEstudiante DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false; //el ? es una binaria, se usa en lugar del if o else. Esto devuelve un arreglo
        }

        public function buscar($idEstudiante) {
            $sql = 'SELECT idEstudiante,nombre,apellido,codigoCurso,
if(codigoCurso=1, "VUE", if(codigoCurso=2, "RUBY", "PHP")) as curso FROM estudiantes WHERE idEstudiante = :idEstudiante ';
             //poner : significa que es un parametro y en el Where estamos filtrando un id especifico que buscamos
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiante', $idEstudiante);
            return ($statement->execute()) ? $statement->fetch() : false; //el ? es una binaria, se usa en lugar del if o else
        }
    }
?>