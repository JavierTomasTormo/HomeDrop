<?php
    //require_once("model/CRUD.php");
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/HomeDropTemplate/HomeDrop/';
    //var_dump($path);
    include($path . "model/CRUD.php");
    
    session_start();

    class modeloController{
        private $model;
        
        public function __construct(){
            $this->model = new Modelo();
        }

        //Mostrar
        static function index(){
            $producto = new Modelo();
            $dato = $producto->read("tabla_propiedades", "1");
            require_once("view/index.php");
        }

        
//#############################################################################################
        static function index_Modal(){
            //$data = $dato;
           // die('<script>console.log('.json_encode( $data ) .');</script>');

            //echo $_GET["id"]; 
            //exit; 
            
            try{
                $producto = new Modelo();
            	$dato = $producto->select($_GET['id']);

            }catch (PDOException $e){
                echo json_encode("ERROR-101");
                echo "Error: " . $e->getMessage();
                exit;
            }
            if(!$dato){
    			echo json_encode("ERROR-202");
                exit;
    		}else{
                //$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                // Convierte el array asociativo a JSON
                echo json_encode($dato);
                
                exit;
    		}

            
            // Finaliza el script
            exit;
            
        }
//#############################################################################################

       //nuevo
        static function nuevo(){
            require_once("view/inc/nuevo.php");
        }
 
        //guardar
        static function guardar(){

///////////////////////////////////////////////////////////////////////////////////
/////////////$data = 'hola guardo php';
////////////die('<script>console.log('.json_encode( $data ) .');</script>');
///////////////////////////////////////////////////////////////////////////////////


            $ID_Reference = $_POST['AutoIDHolder'];
            $m2 = $_POST['Superficie'];
            $superficieok= "";
            $contar=0;
            //echo "VARIABLE:".count($m2);


            if (count($m2)==1) {
                $superficieok="".$m2[0]."";
            } else{
                foreach ($m2 as $superficie) {
                    if ($contar==0):
                        $superficieok="".$superficie."";
                        //echo 0;
                    else:
                        $superficieok = $superficieok.":".$superficie."";
                    endif;
                    $contar=$contar+1;
                }
            
            }
            //echo "Superficie seleccionada: " . implode(", ", $Superficie);
            $Fecha_Pub_V = $_POST['fecha_pub'];
            // Convierte la fecha al formato de la base de datos (YYYY-MM-DD)
            $Fecha_Pub = date("Y-m-d", strtotime($Fecha_Pub_V));

            $Habitaciones = $_POST['Habitaciones'];
            $Precio = $_POST['amountInput'];
            $email = $_POST['email'];
            $Direccion = $_POST['Direccion'];
            $Baños = $_POST['RadioB'];

            $Extras = $_POST['Extras'];
            $superficieextra= "";
            $contar2=0;
            //echo "VARIABLE:".count($m2);


            if (count($Extras)==1) {
                $superficieextra="".$Extras[0]."";
            } else{
                foreach ($Extras as $extra) {
                    if ($contar2==0):
                        $superficieextra="".$extra."";
                        //echo 0;
                    else:
                        $superficieextra = $superficieextra.":".$extra."";
                    endif;
                    $contar2=$contar2+1;
                }
            
            }
           
            
            $aIntroducir ="'".$ID_Reference."','".$superficieok."','".$Fecha_Pub."',".$Habitaciones.",".$Precio.",'".$email."','".$Direccion."',".$Baños.",'".$superficieextra."'";
            //echo "<br>".$aIntroducir."<br>";
            $modelo = new Modelo();
            $dato = $modelo->create("tabla_propiedades",$aIntroducir);
            header("location:".urlsite);
        }


        //editar
        static function editar (){
           /* $id = $_REQUEST['id'];
           if(isset($id)){
                echo "HOLA $id";
            }else{
                echo "ADIOS";
            }*/

            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->read("tabla_propiedades", "id=".$id);
            //echo $id;
            require_once("view/inc/editar.php");
        }



        //actualizar
        static function actualizar(){

            $id = $_POST['ID'];

            //var_dump($id);

            $ID_Reference = $_POST['AutoIDHolder'];
            $m2 = $_POST['Superficie'];
            $superficieok= "";
            $contar=0;
            //echo "VARIABLE:".count($m2);
                if (count($m2)==1) {
                    $superficieok="".$m2[0]."";
                } else{
                    foreach ($m2 as $superficie) {
                        if ($contar==0):
                            $superficieok="".$superficie."";
                            //echo 0;
                        else:
                            $superficieok = $superficieok.":".$superficie."";
                        endif;
                        $contar=$contar+1;
                    }
                }
                //echo "Superficie seleccionada: " . implode(", ", $Superficie);
                $Fecha_Pub_V = $_POST['fecha_pub'];
                // Convierte la fecha al formato de la base de datos (YYYY-MM-DD)
                $Fecha_Pub = date("Y-m-d", strtotime($Fecha_Pub_V));

                $Habitaciones = $_POST['Habitaciones'];
                $Precio = $_POST['amountInput'];
                $email = $_POST['email'];
                $Direccion = $_POST['Direccion'];

                //echo "<br>".$Direccion."<br>";

                $Baños = $_POST['RadioB'];
                $Extras = $_POST['Extras'];
                $superficieextra= "";
                $contar2=0;
                //echo "VARIABLE:".count($m2);
    
    
                if (count($Extras)==1) {
                    $superficieextra="".$Extras[0]."";
                } else{
                    foreach ($Extras as $extra) {
                        if ($contar2==0):
                            $superficieextra="".$extra."";
                            //echo 0;
                        else:
                            $superficieextra = $superficieextra.":".$extra."";
                        endif;
                        $contar2=$contar2+1;
                    }
                
                }
               
                
                $aIntroducir ="ID_Reference='".$ID_Reference."',m²='".$superficieok."',Fecha_Pub='".$Fecha_Pub."',Habitaciones=".$Habitaciones.",Preu=".$Precio.",email='".$email."',Direccion='".$Direccion."',Baños=".$Baños.",extras='".$superficieextra."'";
                //die('<script>console.log('.json_encode( $aIntroducir ) .');</script>');
                //echo "<br>".$aIntroducir."<br>";

                $modelo = new Modelo();
                $dato = $modelo->update("tabla_propiedades",$aIntroducir,"ID=".$id);
                header("location:".urlsite);
        }


        //eliminar
        static function eliminar(){

            $id = $_REQUEST['id'];
            $producto = new Modelo;

            $dato = $producto-> delete("tabla_propiedades", "id=".$id);
            header("location:".urlsite);
        }



        static function dummies_Homedrop(){

            $producto = new Modelo();
            $producto-> dummies("tabla_propiedades");
            header("location:".urlsite);
        }
        



    //end Class ModeloController
    }


?>