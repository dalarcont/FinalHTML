<?php

    /* CLASE MAESTRA PARA EL PORTAL DE ESTUDIANTES */
    class Estudiantes{

        private $accesoPortal = true;
        private $accesoCancelarSemestre = true;


        //Determinar acceso a estudiantes
        function get_accesoPortal(){
            return $this->accesoPortal;
        }

        function get_accesoCriterios(){
            /* Retornar el siguiente si no hay criterios */
            return false;

            /* Retornar el siguiente cuando hay criterios */
                /*
                    CódigoNuméricoPrograma => array(
                        Semestre1 => array ( d-m-Y , h:i)   --> Normalmente primer semestre de cualquier programa NO tiene acceso bajo este sistema de criterios
                        ...
                        SemestreN => datetime dd/mm/yyyy hh:ss:mmm 
                    )
                */
            /*return array(
                "8411" => array(
                    1 => array ("Fecha" => null,"Hora" => null),
                    2 => array ("Fecha" => "17-04-2022","Hora" => "02:00"),
                    3 => array ("Fecha" => "17-04-2022","Hora" => "03:00"),
                    4 => array ("Fecha" => "17-04-2022","Hora" => "04:00"),
                    5 => array ("Fecha" => "17-04-2022","Hora" => "05:00"),
                    6 => array ("Fecha" => "17-04-2022","Hora" => "06:00"),
                    7 => array ("Fecha" => "17-04-2022","Hora" => "07:00")
                )
            );*/
        }

        //Cancelación de semestre
        function get_accesoCancelarSemestre(){
            return $this->accesoCancelarSemestre;
        }


    }



?>