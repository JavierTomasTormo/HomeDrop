<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/HomeDropTemplate/HomeDrop/';



    class Modelo{
        private $datos;
        private $Modelo;
        private $db;


        public function __Construct (){
            $this->Modelo = array();
            $this->db = new PDO('mysql:host=localhost;dbname=HomeDrop',"root","");
        }

        public function create ($tabla, $data){
            $consulta = "insert into ".$tabla." values (null,".$data.")" ;

            $resultado = $this->db->query($consulta);

            if($resultado){
                return true;
            }else{
                return false;
            }
        }

//#############################################################################################
        public function select($id){
            
            //die('<script>console.log('.json_encode( $id ) .');</script>');


            $consulta = "SELECT * FROM tabla_propiedades WHERE ID = :id";
            $statement = $this->db->prepare($consulta);
            $statement->bindParam(':id', $id, PDO::PARAM_STR);
            $statement->execute();
            $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);


            //die('<script> console.log('.json_encode( $resultado ) .'); </script>');
         
            return $resultado;

            $this->db = null;

            //return $res;
        }
           
//#############################################################################################

        public function read ($tabla, $condicion){
            $consul = "select * from ".$tabla." where ".$condicion.";" ;
            
            $resu = $this->db->query($consul);

                while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)){
                    $this->datos[]=$filas;
                }
                return $this->datos;
        }

//#############################################################################################        
        public function update ($tabla, $data, $condicion){
            var_dump($data);
    ///////////////////////////////////////////////////////////////////////////////////    
        //die('<script>console.log('.json_encode( $data ) .');</script>');////////////
    /////////////////////////////////////////////////////////////////////////////////
            $consulta = "update ".$tabla." set ".$data." where ".$condicion;
            $resultado = $this->db->query($consulta);

            if ($resultado){
                return true;
            }else{
                return false;
            }
        }

        public function delete ($tabla, $condicion){
            $eli = "delete from ".$tabla." where ".$condicion;
            $res = $this->db->query($eli);

            if ($res){
                return true;
            }else{
                return false;
            }
        }




        //Dummies
        public function dummies($tabla){
        ///////////////////////////////////////////////////////////////////////////// 
        //$data = 'Connexión Completada (Dummies)';//////////////////////////////////
        //die('<script>console.log('.json_encode( $data ) .');</script>');///////////
        /////////////////////////////////////////////////////////////////////////////

            $consulta = "DELETE FROM ".$tabla;

            $resultado = $this->db->query($consulta);

            if (!$resultado) {
                die("Error en la consulta DELETE: " . mysqli_error($this->db));
            }

            $datos = "INSERT INTO `tabla_propiedades` (`ID`, `ID_Reference`, `m²`, `Fecha_Pub`, `Habitaciones`, `Preu`, `email`, `Direccion`, `Baños`, `extras`) VALUES
            (2, '53JL8', '~90:~120:~300:300+', '2019-02-15', 3, 120730, 'manolopepe@gmail.com', 'Rúa Carmen, 19-1, 15830 Negreira, A Coruña', 2, 'Garaje:Piscina'),
            (3, 'HL7DT', '~50:~90:~220:~300', '2012-11-30', 3, 153700, 'pasteleriamaria@gmail.com', 'Rúa Castelao, 23, 15830 Negreira, A Coruña', 2, 'Amueblado:Ascensor'),
            (4, 'AD6QV', '∀:~50:~220', '2000-01-08', 4, 487776, 'hackvenger@myclassgame.com', 'Cl. de Ayala, 108, Salamanca, 28006 Madrid', 3, 'Terraza:Piscina'),
            (5, '1UW5X', '∀:~50:~90:~120:~300:300+', '2023-12-31', 6, 67933, 'AlexanderSe@gmail.com', 'Rúa de Madrid, 2, 15707 Santiago de Compostela, A Coruña', 3, 'Garaje:Piscina'),
            (6, 'E6L3I', '∀:~50:~90:~120:~180', '2024-12-31', 6, 1299999, 'AlexanderSebastian@gmail.com', 'Calle de Don Ramón de la Cruz, 88, Salamanca, 28006 Madrid', 3, 'Ascensor:Aire_Acondicionado'),
            (7, '7H3K2', '∀:~120:~300:300+', '2020-05-20', 2, 95000, 'lauragonzalez@gmail.com', 'Calle de la Rosa, 27, 28010 Madrid', 1, 'Garaje:Trastero'),
            (8, '1B5G9', '∀:~90:~120:300+', '2021-09-10', 4, 220000, 'carlosrodriguez@gmail.com', 'Avenida de la Palmera, 15, 41013 Sevilla', 3, 'Ninguno'),
            (9, '9P2R6', '∀:~90:~120:~300:300+', '2022-03-08', 1, 75000, 'mariaperez@gmail.com', 'Carrer de la Marina, 42, 08005 Barcelona', 1, 'Amueblado'),
            (10, '2Z4D7', '∀:~90:~120:~300', '2023-07-12', 3, 180000, 'josemartinez@gmail.com', 'Rua da Prata, 8, 1100-420 Lisboa, Portugal', 2, 'Garaje:Piscina'),
            (11, '8C6V5', '∀:~90:~120:~300:300+', '2024-01-05', 2, 105000, 'anarodriguez@gmail.com', 'Rue du Faubourg Saint-Antoine, 75, 75011 Paris, France', 1, 'Garaje:Piscina')";
         
         try {
            $stmtInsertar = $this->db->prepare($datos);
            $stmtInsertar->execute();
        } catch (PDOException $e) {
            echo "Error en la consulta INSERT: " . $e->getMessage();
            return;
        }
            //$rdo = mysqli_multi_query($this->db, $datos);
            
            
            $this->db = null;

            //return $res;
        }



    }
?>