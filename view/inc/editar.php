<?php
    require_once("header_Form_Update.php");
?>

<form class="tamanyo" method="post" name="ActualizarRegistro" id="ActualizarRegistro" onsubmit="return ValidateHomeDrop();" action=""><!---->
        <?php 
        
            if(!empty($dato)){
                              
               //var_dump($dato); 

                foreach($dato as $key => $value){
                    foreach ($value as $v):
        ?>
        <div id="container">
            <div id="column1">               
                    
                    <div class="limitright">
                
                        <!--#########################################--> 
                        <div class="Dorado_SubString">ID Referencia Catastral :
                            <input type="text"  class="texto_dorado_tab" style="width:15%; text-align: center;"
                                value="<?php echo $v['ID_Reference'] ?>" name="AutoIDHolder" id="AutoIDHolder" readonly/>
                        </div>    
                            <br/>
                                <span id="error_id_reference" style="color:red;"></span>
                            <br/>
                        <!--#########################################--> 

                            <?php 
                                $preval = [$v['m²']]; 
                                $cadena_valores = implode(":", $preval);                             
                                $preval_array = explode(":", $cadena_valores);

                            ?> 

                    <label for="Superficie" class="Dorado_SubString"> Superfície en m²: (Valor Actual)
                    <br/>
                    <br/>
                        <input type="text"  id="inputSincronizado" name="inputSincronizado" class="texto_dorado_tab" style="width:80%; text-align: center;" 
                            value="<?php echo $cadena_valores; ?>" readonly/>
                        <!--
                            <input type="text"  class="texto_dorado_tab" style="width:80%; text-align: center;" 
                            oninput="this.form.Superficie.value = this.value"  readonly/>
                        -->
                    </label>
                    

                        <div class="containercb">
                            <table>

                                    <tr>
                                    
                                            <label for="checkbox0">
                                                <input type="checkbox" id="checkbox0" name="Superficie[]" 
                                                    <?php if (in_array("∀", $preval_array)) echo "checked"; ?>  value="∀"/>
                                                    No Especifica
                                            </label>

                                            <label for="checkbox1">
                                                <input type="checkbox" id="checkbox1" name="Superficie[]" 
                                                    <?php if (in_array("~50", $preval_array)) echo "checked"; ?>  value="~50"/>
                                                10-50m²
                                            </label>

                                            <label for="checkbox2">
                                                <input type="checkbox" id="checkbox2" name="Superficie[]" 
                                                    <?php if (in_array("~90", $preval_array)) echo "checked"; ?>  value="~90"/>
                                                51-90m²
                                            </label>

                                            <label for="checkbox3">
                                                <input type="checkbox" id="checkbox3" name="Superficie[]" 
                                                    <?php if (in_array("~120", $preval_array)) echo "checked"; ?>  value="~120"/>
                                                91-120m²
                                            </label>
                                    </tr> 
        
                            </table>
                        </div>
                        <div class="containercb">
                            <table>
            
                                    <tr>
                                            <label for="checkbox4">
                                                <input type="checkbox" id="checkbox4" name="Superficie[]" 
                                                    <?php if (in_array("~180", $preval_array)) echo "checked"; ?> value="~180"/>
                                                121-180m²
                                            </label>

                                            <label for="checkbox5">
                                                <input type="checkbox" id="checkbox5" name="Superficie[]" 
                                                    <?php if (in_array("~220", $preval_array)) echo "checked"; ?> value="~220"/>
                                                181-220m²
                                            </label>

                                            <label for="checkbox6">
                                                <input type="checkbox" id="checkbox6" name="Superficie[]" 
                                                    <?php if (in_array("~300", $preval_array)) echo "checked"; ?> value="~300"/>
                                                221-300m²
                                            </label>

                                            <label for="checkbox7">
                                                <input type="checkbox" id="checkbox7" name="Superficie[]" 
                                                    <?php if (in_array("300+", $preval_array)) echo "checked"; ?> value="300+"/>
                                                    301 + m²
                                            </label>
                                    </tr>
                            </table>
                        </div>
                        <br/>
                            <span id="error_Superficie" style="color:red;"></span>
                        <br/> 
                    


                    <br/>
                    <!--#########################################-->
                        <label for="date" class="Dorado_SubString" style="padding: 2%;"> Fecha de Publicación:       
                            <input type="text" name="fecha_pub" autocomplete="off" id="fecha_pub" value="<?php echo $v['Fecha_Pub'] ?>" style="width:20%; text-align: center;"/>
                        </label>
                                                    
                        <br/>
                            <span id="error_DatePicker" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->

                        <div class="Dorado_SubString">Habitaciones: (Valor Actual)
                        </div>
                        <div class="grande">
                                <select class="pointer" id="Habitaciones" name="Habitaciones" required >
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "1" ) echo "selected"; ?> value="1">1 Habitación</option>
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "2" ) echo "selected"; ?> value="2">2 Habitaciones</option>
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "3" ) echo "selected"; ?> value="3">3 Habitaciones</option>
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "4" ) echo "selected"; ?> value="4">4 Habitaciones</option>
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "5" ) echo "selected"; ?> value="5">5 Habitaciones</option>
                                    <option <?php if (isset($v['Habitaciones']) && $v['Habitaciones'] == "6" ) echo "selected"; ?> value="6">6 o + Habitaciones</option>
                                </select>   
                        </div>
                        <br/>
                            <span id="error_Habitaciones" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->
                
                    <legend class="Dorado_SubString">Baños:(Valor Actual)
                        <input type="text" id="radioSincronizado" name="radioSincronizado" class="texto_dorado_tab" style="width:7%; text-align: center;" value="<?php echo $v['Baños'] ?>" readonly/>
                    </legend>

                
                    <div class="containerradio">


                        <div>
                            <input type="radio" id="RadioB" name="RadioB" <?php if (isset($v['Baños']) && $v['Baños'] == "0" ) echo "checked"; ?> value="0" />
                            <label for="RadioB">0 Baños</label>
                        </div>

                        <div>
                            <input type="radio" id="RadioB" name="RadioB" <?php if (isset($v['Baños']) && $v['Baños'] == "1" ) echo "checked"; ?> value="1" />
                            <label for="RadioB">1 Baño</label>
                        </div>
                        
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" <?php if (isset($v['Baños']) && $v['Baños'] == "2" ) echo "checked"; ?> value="2" />
                            <label for="RadioB">2 Baños</label>
                        </div>
                        
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" <?php if (isset($v['Baños']) && $v['Baños'] == "3" ) echo "checked"; ?> value="3" />
                            <label for="RadioB">3 Baños o +</label>
                        </div>
                        <br/>
                            <span id="error_banos" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->
                    
                    </div>
                
                </div>

            </div>
            <div id="column2">
                
                <div class="limitright">
                    <p for="range" class="Dorado_SubString">Precio:</p>

                    <!--<?php var_dump($v['Preu']);  ?>-->

                    <input type="range" name="amountRange" id="amountRange" min="5000" max="1299999" value="<?php echo $v['Preu'] ?>" 
                        oninput="this.form.amountInput.value = this.value" />
                    <input type="number" name="amountInput" id="amountInput" min="5000" max="1299999" value="<?php echo $v['Preu'] ?>" 
                        oninput="this.form.amountRange.value = this.value" />
                        <br/>
                            <span id="error_Precio" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->
                </div>

                <div class="limitright"> 
                    <label for="email" class="Dorado_SubString">Correo electrónico: (Contacto)</label>
                    <input type="email" name="email" id="email" autocomplete="off" title="Debe contener tres cadenas separadas por un @ y un punto" value="<?php echo $v['email'] ?>">
                    <br/>
                        <span id="error_email" style="color:red;"></span>
                    <br/>
                    <!--#########################################-->

                    <!--#########################################--> 

                            <?php 
                                $prevalextras = [$v['extras']]; 
                                $cadena_valores_extras = implode(":", $prevalextras);                             
                                $preval_array_extras = explode(":", $cadena_valores_extras);

                            ?> 

                    <label for="Superficie" class="Dorado_SubString"> Extras: (Valor Actual)
                    <br/>
                    <br/>
                        <input type="text"  id="extrasSincronizados" name="extrasSincronizados" class="texto_dorado_tab" style="width:80%; text-align: center;" 
                            value="<?php echo $cadena_valores_extras; ?>" readonly/>

                    </label>
                    

                        <div class="containercb">
                            <table>

                                    <tr>
                                    
                                            <label for="checkboxextra0">
                                                <input type="checkbox" id="checkbox0" name="Extras[]" 
                                                    <?php if (in_array("Ninguno", $preval_array_extras)) echo "checked"; ?>  value="Ninguno"/>
                                                    Ninguno
                                            </label>

                                            <label for="checkboxextra1">
                                                <input type="checkbox" id="checkbox1" name="Extras[]" 
                                                    <?php if (in_array("Garaje", $preval_array_extras)) echo "checked"; ?>  value="Garaje"/>
                                                    Garaje
                                            </label>

                                            <label for="checkboxextra2">
                                                <input type="checkbox" id="checkbox2" name="Extras[]" 
                                                    <?php if (in_array("Trastero", $preval_array_extras)) echo "checked"; ?>  value="Trastero"/>
                                                    Trastero
                                            </label>

                                            <label for="checkboxextra3">
                                                <input type="checkbox" id="checkbox3" name="Extras[]" 
                                                    <?php if (in_array("Amueblado", $preval_array_extras)) echo "checked"; ?>  value="Amueblado"/>
                                                    Amueblado
                                            </label>
                                    </tr> 
        
                            </table>
                        </div>
                        <div class="containercb">
                            <table>
            
                                    <tr>
                                            <label for="checkboxextra4">
                                                <input type="checkbox" id="checkbox4" name="Extras[]" 
                                                    <?php if (in_array("Aire_Acondicionado", $preval_array_extras)) echo "checked"; ?> value="Aire_Acondicionado"/>
                                                    Aire Acondicionado
                                            </label>

                                            <label for="checkboxextra5">
                                                <input type="checkbox" id="checkbox5" name="Extras[]" 
                                                    <?php if (in_array("Ascensor", $preval_array_extras)) echo "checked"; ?> value="Ascensor"/>
                                                    Ascensor
                                            </label>

                                            <label for="checkboxextra6">
                                                <input type="checkbox" id="checkbox6" name="Extras[]" 
                                                    <?php if (in_array("Terraza", $preval_array_extras)) echo "checked"; ?> value="Terraza"/>
                                                    Terraza
                                            </label>

                                            <label for="checkboxextra7">
                                                <input type="checkbox" id="checkbox7" name="Extras[]" 
                                                    <?php if (in_array("Piscina", $preval_array_extras)) echo "checked"; ?> value="Piscina"/>
                                                    Piscina
                                            </label>
                                    </tr>
                            </table>
                        </div>
                        <br/>
                            <span id="error_Extras" style="color:red;"></span>

                    <!--#########################################-->


                </div>

                <div class="limitright"> 
                    <label for="Direccion" class="Dorado_SubString">Dirección</label>
                    <input type="text" name="Direccion" id="Direccion" autocomplete="off" value="<?php echo $v['Direccion'] ?>" title="Dirección de la Propiedad" >
                    <br/>
                        <span id="error_Direccion" style="color:red;"></span>
                    <br/>
                    <!--#########################################-->
                </div>

                

 
                
            </div>

                
            </div>

        </div>

        <!--ID en Oculto-->
        <input type="hidden" name="ID" value="<?php echo $v['ID']?>">
       
        <?php 
           // var_dump($v['ID'])
        ?>

        <div align="center">
            <hr width="20%">
            
            <button type="button" id="actualizar" value="actualizar" name="btn"  onclick="ValidateHomeDrop('Update')" >
                <img src="view\img\Update.png"  alt="imagen" width="32" height="32" style="vertical-align: middle">
                Update
            </button>

            <input type="hidden" name="m" value="actualizar">





            <hr width="20%">
<br/>
<br/>
            <hr width="80%">

        </div>
        <?php 
                endforeach;
            }
        }        

        //var_dump($ID_Reference);
        ?>

    </form>



<?php
    require_once("footer.php");
?>