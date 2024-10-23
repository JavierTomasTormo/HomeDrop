<?php
    require_once("header_Form_Alta.php");
?>

<form class="tamanyo" method="post" name="CrearRegistro" id="CrearRegistro" onsubmit="return ValidateHomeDrop();" action=""> <!---->
        <div id="container">
            <div id="column1">
                
                 
                <?php
                    function AutoIDR() {
                        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $longitud = 5;
                        $codigo = substr(str_shuffle($caracteres), 0, $longitud);
                        return $codigo;
                    }
                    $AutoID = AutoIDR();
                ?>
                    
                    <div class="limitright">
                    <!--#########################################--> 
                        <p class="Dorado_SubString"> Id Referencia Catastral :</p>
                            <input type="text" name="AutoIDHolder" id="AutoIDHolder" class="texto_dorado_tab" style="width:15%; text-align: center;"
                                value="<?php echo $AutoID; ?>" readonly/>
                            <br/>
                                <span id="error_id_reference" style="color:red;"></span>
                            <br/>
                    <!--#########################################--> 
                        <br/>

                    <label for="Superficie" class="Dorado_SubString"> Superfície en m²:
                        <br/>
                        <br/>
                        <input type="text"  id="inputSincronizado" name="inputSincronizado" class="texto_dorado_tab" style="width:80%; text-align: center;" 
                            value="∀" readonly/>

                    </label>
                        <div class="containercb">
                            <table>
                                    <tr>
                                            <label for="checkbox0">
                                                <input type="checkbox" id="Superficie[]" name="Superficie[]" value="∀" checked />
                                                    No Especifica
                                            </label>

                                            <label for="checkbox1">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~50"/>
                                                10-50m²
                                            </label>
                                            <label for="checkbox2">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~90"/>
                                                51-90m²
                                            </label>

                                            <label for="checkbox3">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~120"/>
                                                91-120m²
                                            </label>
                                    </tr> 
        
                            </table>
                        </div>
                        <div class="containercb">
                            <table>
            
                                    <tr>
                                            <label for="checkbox4">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~180"/>
                                                121-180m²
                                            </label>

                                            <label for="checkbox5">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~220"/>
                                                181-220m²
                                            </label>

                                            <label for="checkbox6">
                                            <input type="checkbox" id="Superficie[]" name="Superficie[]" value="~300"/>
                                                221-300m²
                                            </label>

                                            <label for="checkbox7">
                                                <input type="checkbox" id="Superficie[]" name="Superficie[]" value="300+"/>
                                                    301 + m²
                                            </label>
                                    </tr>
                            </table>
                        </div>
                        <br/>
                            <span id="error_Superficie" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->

                        <label for="date" class="Dorado_SubString"> Fecha de Publicación:   
                            <input type="text" name="fecha_pub" id="fecha_pub" autocomplete="off" style="width:20%; text-align: center;"/>
                            </label>
                    <br/>
                        <span id="error_DatePicker" style="color:red;"></span>
                    <br/>
                    <!--#########################################-->

                        <div class="Dorado_SubString">Habitaciones:</div>
                            <div class="grande">
                                <select class="pointer" id="Habitaciones" name="Habitaciones" >
                                    <option value="1">1 Habitación</option>
                                    <option value="2">2 Habitaciones</option>
                                    <option value="3">3 Habitaciones</option>
                                    <option value="4">4 Habitaciones</option>
                                    <option value="5">5 Habitaciones</option>
                                    <option value="6">6 o + Habitaciones</option>
                                </select>   
                            </div>
                        </div>
                        <br/>
                            <span id="error_Habitaciones" style="color:red;"></span>
                    <!--#########################################-->
                    <div class="limitright">
                    
                    <legend class="Dorado_SubString">Baños:
                        <input type="text" id="radioSincronizado" name="radioSincronizado" class="texto_dorado_tab" style="width:5%; text-align: center;" value="0" readonly/>
                    </legend>
                    <div class="containerradio">
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" value="0" checked/>
                            <label>0 Baños</label>
                        </div>
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" value="1" />
                            <label>1 Baño</label>
                        </div>
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" value="2" />
                            <label>2 Baños</label>
                        </div>
                        <div>
                            <input type="radio" id="RadioB" name="RadioB" value="3" />
                            <label>3 Baños o +</label>
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

                    <input type="range" name="amountRange" id="amountRange" min="5000" max="1299999" value="0" 
                        oninput="this.form.amountInput.value = this.value" />
                    <input type="number" name="amountInput" id="amountInput" min="5000" max="1299999" value="0" 
                        oninput="this.form.amountRange.value = this.value" />
                        <br/>
                            <span id="error_Precio" style="color:red;"></span>
                        <br/>
                    <!--#########################################-->

                </div>

            <div class="limitright"> 
            <label for="email" class="Dorado_SubString">Correo electrónico: (Contacto)</label>
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="ejemplo@ejemplo.es" title="Debe contener tres cadenas separadas por un @ y un punto">
                    <br/>
                        <span id="error_email" style="color:red;"></span>
                    <br/>
                    

                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################--> 
                <br/>

                <label for="Superficie" class="Dorado_SubString"> Extras:
                    <br/>
                    <br/>
                    <input type="text"  id="extrasSincronizados" name="extrasSincronizados" class="texto_dorado_tab" style="width:80%; text-align: center;" 
                            value="Ninguno" readonly/>
                </label>
                    <div class="containercb">
                        <table>
                                <tr>
                                        <label for="checkboxextra0">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Ninguno" checked />
                                        Ninguno
                                        </label>

                                        <label for="checkboxextra1">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Garaje"/>
                                        Garaje
                                        </label>
                                        <label for="checkboxextra2">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Trastero"/>
                                        Trastero
                                        </label>

                                        <label for="checkboxextra3">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Amueblado"/>
                                        Calefacción
                                        </label>
                                </tr> 

                        </table>
                    </div>
                    <div class="containercb">
                        <table>

                                <tr>
                                        <label for="checkboxextra4">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Aire_Acondicionado"/>
                                        Aire Acondicionado
                                        </label>

                                        <label for="checkboxextra5">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Ascensor"/>
                                        Ascensor
                                        </label>

                                        <label for="checkboxextra6">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Terraza"/>
                                        Terraza
                                        </label>

                                        <label for="checkboxextra7">
                                        <input type="checkbox" id="Extras[]" name="Extras[]" value="Piscina"/>
                                        Piscina
                                        </label>
                                </tr>
                        </table>
                    </div>
                    <br/>
                        <span id="error_Extras" style="color:red;"></span>

                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->
                <!--#########################################-->

            </div> 
                <div class="limitright"> 
                    <label for="Direccion" class="Dorado_SubString">Dirección</label>
                    <input type="text" name="Direccion" id="Direccion" autocomplete="off" placeholder="C/ Ejemplo 1-2-3" title="Dirección de la Propiedad" >
                    <br/>
                        <span id="error_Direccion" style="color:red;"></span>
                    <br/>
                    <!--#########################################-->
                </div>



                
            </div>

        </div>
        <div align="center">
            <hr width="20%">
            <button type="button" id="guardar" value="guardar" name="btn"  onclick="ValidateHomeDrop('Crear')" >
                <img src="view\img\EnviarForm.png"  alt="imagen" width="32" height="32" style="vertical-align: middle">
                Enviar datos
            </button>
            <input type="hidden" name="m" value="guardar">
<!---->



            <hr width="20%">




            <button type="reset">

                <img src="view\img\LimpiarForm.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
                Limpiar Formulario
                
            </button>
            <hr width="80%">

        </div>
    </form>


<?php
    require_once("footer.php");
?>